@extends('auth.template.main')

@section('content-authenticate')
  <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-sky-50 shadow rounded-[30px] md:p-8">
      <div class="text-3xl mb-4 font-bold text-center text-gray-900">
        Login
      </div>

      @if (session()->has('alert'))
        @include('sweetalert::alert')
      @endif

      <form action="{{ route('login.store') }}"
        method="POST"
        class="p-3 space-y-4">
        @csrf

        <div class="w-full">
          <input type="text"
            id="email"
            name="email"
            placeholder="Masukkan email"
            class="inputan"
            value="{{ old('email') }}"
          />
          @error('email')
            <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="w-full">
          <input type="password"
            id="password"
            name="password"
            placeholder="Masukkan password"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
          />
          @error('password')
            <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
              {{ $message }}
            </p>
          @enderror
        </div>

        <button type="submit" class="app-button-auth">
          Login to your account
        </button>

        <div class="text-gray-700 app-auth-link">
          belum terdaptar ?
          <a href="{{ route('register') }}"
            class="text-blue-600 underline">
            buat akun
          </a>
        </div>

        <div class="app-auth-link">
          <a href="#"
            class="text-red-600 underline">
            lupa password ?
          </a>
        </div>

        <div class="text-gray-700 app-auth-link">
          back to
          <a href="{{ route('home') }}"
            class="text-blue-600 underline">
            home
          </a>
        </div>
      </form>
    </div>
  </div>
@endsection

