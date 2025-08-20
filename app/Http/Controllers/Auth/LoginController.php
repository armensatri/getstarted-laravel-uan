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
    //
  }
}
