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
          text-black truncate sm:block">
          <span>@</span>{{ Auth::user()->username }}
        </span>

          <i class="text-base text-black bi bi-arrow-down-circle"></i>
      </div>

      <div
        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event-web-auth">
        <div class="p-1 space-y-0.5">
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
            Newsletter
          </a>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
            Purchases
          </a>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
            Downloads
          </a>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
            Team Account
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
