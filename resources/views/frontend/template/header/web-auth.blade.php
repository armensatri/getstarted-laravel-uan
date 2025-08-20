<div class="hidden lg:flex lg:flex-1 lg:justify-end">
  @auth
    <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex">
      <div id="hs-dropdown-hover-event-web-auth"
        aria-haspopup="menu"
        aria-expanded="false"
        aria-label="Dropdown"
        class="hs-dropdown-toggle flex items-center gap-x-1 tracking-wide justify-center px-3 py-[3px] cursor-pointer">

        <picture>
          <img src="{{ Auth::user()->image ??
            'frontend/img/user/user.png' }}"
            alt="user-profile"
            class="object-cover object-top p-0.5
            bg-white rounded-full w-9 h-9"
          />
        </picture>

        <span class="text-[17px] font-normal tracking-wide
          text-slate-800 truncate sm:block">
          <span>@</span>{{ Auth::user()->username }}
        </span>

        <i class="text-base text-black bi bi-arrow-down-circle"></i>
      </div>

      <div role="menu"
        aria-orientation="vertical"
        aria-labelledby="hs-dropdown-hover-event-web-auth"
        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-52 bg-white rounded-3xl mt-2 after:h-4 border border-gray-300 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full">
        <div class="space-y-0.5 p-3">
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-[10px] text-sm text-gray-800 hover:bg-sky-50 hover:text-black" href="#">
            Account
          </a>

          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-[10px] text-sm text-gray-800 hover:bg-sky-50 hover:text-black" href="#">
            Dashboard
          </a>
        </div>
      </div>
    </div>
  @else
    <a href="{{ route('login') }}"
      class="px-3.5 py-[3px] text-base font-semibold leading-6 text-gray-900 bg-blue-200 border border-gray-400 rounded-xl
      hover:bg-blue-300">
      Login
    </a>
  @endauth
</div>
