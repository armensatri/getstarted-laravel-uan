<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Auth\Login\LoginSr;
use App\Models\Manageuser\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login.index', [
      'title' => 'Explore | Login'
    ]);
  }

  public function store(LoginSr $request)
  {
    $datastore = $request->validated();

    $key = Str::lower($request->email) . '|' . $request->ip();
    $maxAttempts = config('auth.login_throttle.max_attempts', 5);
    $delay = config('auth.login_throttle.decay_seconds', 60);

    if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
      $seconds = RateLimiter::availableIn($key);
      $wait = now()->addSeconds($seconds)->diffForHumans(null, true);

      Alert::error(
        'Terlalu banyak percobaan login',
        "Silahkan coba lagi dalam $wait"
      );

      return Redirect::route('login')->withInput();
    }

    if (Auth::attempt($datastore)) {
      $request->session()->regenerate();

      User::where('id', Auth::user()->id)->update([
        'status_on_of' => 1,
        'last_seen' => now()
      ]);

      RateLimiter::clear($key);

      $routeMap = [
        'owner' => 'owner',
        'superadmin' => 'superadmin',
        'admin' => 'admin',
        'member' => 'member',
      ];

      $role = Auth::user()?->role?->name;
      $route = $routeMap[$role] ?? null;

      if ($route) {
        return Redirect::route($route);
      }

      Alert::error(
        'Access blocked',
        'anda tidak memiliki akses'
      );

      Auth::logout();

      return Redirect::route('login');
    }

    RateLimiter::hit($key, $delay);

    Alert::error(
      'error',
      'Login gagal! email atau password salah'
    );

    return Redirect::route('login');
  }
}
