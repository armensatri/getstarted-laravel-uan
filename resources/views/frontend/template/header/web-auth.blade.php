<div class="hidden lg:flex lg:flex-1 lg:justify-end">
      @auth
        <div id="dropdownHoverButton"
          data-dropdown-toggle="dropdownAuth"
          data-dropdown-trigger="hover"
          class="flex items-center gap-x-1 tracking-wide justify-center px-3 py-[3px] text-base font-medium rounded-[13px] cursor-pointer">

          <picture>
            <img src="{{ Auth::user() && Auth::user()->image ?
              asset('storage/' . Auth::user()->image) :
              '/frontend/img/user/user.png' }}"
              alt="user-profile"
              loading="lazy"
              class="object-cover object-top p-0.5
              bg-white rounded-full w-9 h-9"
            />
          </picture>

          <span class="text-[17px] font-normal tracking-wide text-black truncate sm:block">
            <span>@</span>{{ Auth::user()->username }}
          </span>

          <i class="text-base text-black bi bi-arrow-down-circle"></i>
        </div>

        <div id="dropdownAuth"
          class="z-10 hidden px-6 py-4 mr-8 border border-gray-300 shadow w-60 bg-sky-50 rounded-3xl">

          <ul aria-labelledby="dropdownHoverButton"
            class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <div class="flex items-center gap-x-3.5 border-b-[1px] pb-2">
              <picture>
                <img src="{{ Auth::user() && Auth::user()->image ?
                  asset('storage/' . Auth::user()->image) :
                  '/frontend/img/user/user.png' }}"
                  alt="profile"
                  class="w-11 h-11 object-cover object-top
                  rounded-full p-0.5 bg-white"
                />
              </picture>

              <div class="leading-none">
                <div class="text-base font-medium tracking-wide text-gray-900">
                  <span>@</span>{{ Auth::user()->username }}
                </div>

                <div class="ml-1 text-gray-700">
                  role {{ Auth::user()->role->slug }}
                </div>
              </div>
            </div>

            <div class="mt-6 space-y-3">
              <div class="inline-flex items-center ml-4">
                <img src="/frontend/img/menu/auth/account.png"
                  alt="account"
                  class="size-[18px]"
                />

                <div class="m-1 hs-dropdown [--trigger:hover]
                  relative inline-flex">
                  <button type="button"
                    id="hs-dropdown-hover-event"
                    aria-label="Dropdown"
                    aria-haspopup="menu"
                    aria-expanded="false"
                    class="flex items-center w-full ml-2 space-x-3 text-gray-700 text-[15px] hs-dropdown-toggle hover:text-blue-700">
                    Account
                    <i class="ml-2 text-sm text-black bi bi-arrow-down-circle"></i>
                  </button>

                  <div role="menu"
                    aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event"
                    class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-52 bg-sky-50 shadow-md border border-gray-300 rounded-3xl mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full">

                    <div class="p-3 space-y-0.5">
                      <a href="#"
                        class="flex items-center tracking-wide gap-x-3.5 py-2 px-3 rounded-lg text-gray-700 hover:text-blue-600 text-[15px]">

                        <img src="/frontend/img/menu/auth-drop/profile.jpg"
                          alt="profile"
                          class="size-[18px]"
                        />

                        Profile
                      </a>

                      <a href="#"
                        class="border-t-[1px] flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-[15px] text-red-600 hover:text-red-800">
                        <i class="text-lg text-red-600 bi bi-trash3-fill"></i>
                        Delete account
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <a href="{{ \App\Helpers\Redirects::Dashboard() }}"
                class="inline-flex ml-4">
                <div class="flex items-center w-full space-x-3 text-[15px] tracking-wide text-gray-700 hover:text-blue-600">

                  <img src="/frontend/img/menu/auth/dashboard.jpg"
                    alt="dashboard"
                    class="size-[18px]"
                  />

                  <span>Dashboard</span>
                </div>
              </a>
            </div>

            <form action="{{ route('auth.logout') }}"
              method="POST">
              @csrf

              <button type="submit"
                class="px-3 py-1.5 mt-6 bg-red-600 shadow-sm
                hover:bg-red-700 rounded-xl w-full">
                <div class="inline-flex items-center justify-center">
                  <i class="text-white bi bi-arrow-right-circle"></i>
                  <span class="ml-1 text-base tracking-wider text-white">
                    Logout
                  </span>
                </div>
              </button>
            </form>
          </ul>
        </div>
      @else
        <a href="{{ route('login') }}"
          class="px-3.5 py-[3px] text-base font-semibold leading-6 text-gray-900 bg-blue-200 border border-gray-400 rounded-xl
          hover:bg-blue-300">
          Login
        </a>
      @endauth
    </div>
