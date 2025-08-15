@extends('auth.template.main')

@section('content-auth')
  <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-white shadow rounded-3xl md:p-8">
      <div class="text-3xl mb-4 font-bold text-center text-gray-800">
        Register
      </div>

      @if (session()->has('alert'))
        @include('sweetalert::alert')
      @endif

      <form action="{{ route('register.store') }}"
        method="POST"
        class="p-3 space-y-4">
        @csrf

        <div class="w-full">
          <input type="text"
            id="name"
            name="name"
            placeholder="Masukkan nama lengkap"
            class="bg-gray-50 border border-gray-300 text-gray-900
            text-sm
            rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
            value="{{ old('name') }}"
          />
          @error('name')
            <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="w-full">
          <input type="text"
            id="username"
            name="username"
            placeholder="Masukkan username"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
            value="{{ old('username') }}"
          />
          @error('username')
            <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="w-full">
          <input type="text"
            id="email"
            name="email"
            placeholder="Masukkan email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
            value="{{ old('email') }}"
          />
          @error('email')
            <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="space-y-4 md:space-y-0 md:flex md:gap-4">
          <div class="w-full">
            <input type="password"
              id="password"
              name="password"
              placeholder="Masukkan password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
              rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
            />
            @error('password')
              <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
                {{ $message }}
              </p>
            @enderror
          </div>

          <div class="w-full">
            <input type="password"
              id="passkon"
              name="passkon"
              placeholder="Password konfirm"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
              rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
            />
            @error('passkon')
              <p class="mt-1 ml-3 font-serif text-sm tracking-wider text-red-600">
                {{ $message }}
              </p>
            @enderror
          </div>
        </div>

        <button type="submit" class="block w-2/3 mx-auto text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-base tracking-wide px-5 py-2">
          Create your account
        </button>

        <div class="text-gray-700 text-sm italic font-medium tracking-wide text-center">
          sudah mempunyai akun ?
          <a href="{{ route('login') }}"
            class="text-blue-600 underline">
            login sekarang
          </a>
        </div>

        <div class="text-gray-700 text-sm italic font-medium tracking-wide text-center">
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
