<header x-data="{ openSidebar: false }"
  class="fixed inset-x-0 top-0 z-20 max-w-full mx-auto antialiased bg-sky-100">

  <nav aria-label="Global"
    class="flex items-center justify-between p-5 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
        <img src="/frontend/img/logo/logo.jpg"
          alt="logo"
          class="w-8 h-8 rounded-full"
        />
      </a>
    </div>

    <div class="flex lg:hidden">
      <button @click="openSidebar = true"
        type="button"
        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <svg fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          aria-hidden="true"
          class="w-6 h-6">
          <path stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
          />
        </svg>
      </button>
    </div>

    <!-- MENU WEB -->
    <div class="hidden lg:flex lg:gap-x-4">
      <a href="{{ route('home') }}"
        class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
        rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
        Home
      </a>

      <div>
        <div class="hs-dropdown [--strategy:static]
          md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">

          <button type="button"
            id="hs-header-base-mega-menu-fullwidth"
            aria-haspopup="menu"
            aria-expanded="false"
            aria-label="Mega Menu"
            class="flex items-center w-auto p-2 tracking-wide justify-center
            px-3.5 py-[3px] text-lg font-medium leading-6 text-black border border-gray-400 rounded-[13px] bg-blue-200 cursor-pointer hs-dropdown-toggle hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
            Menu
            <i class="ml-1 text-base bi bi-arrow-down-circle"></i>
          </button>

          <div role="menu"
            aria-orientation="vertical"   aria-labelledby="hs-header-base-mega-menu-fullwidth"
            class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full min-w-60 hidden z-10 top-full start-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5" >

            <div class="bg-white md:mx-6 lg:mx-8 md:rounded-3xl">
              <div class="gap-4 py-1 md:p-4 md:grid md:grid-cols-2 lg:grid-cols-3">
                <!-- DEFAULT -->
                <div class="bg-sky-100 rounded-2xl">
                  <div class="flex flex-col p-2">
                    <span class="ms-2.5 mb-4 tracking-wide font-bold text-base uppercase text-gray-800 text-center mt-4">
                      Explore
                    </span>

                    <div class="inline-flex justify-center">
                      <img src="/image/default.png"
                        alt="logo"
                        class="size-32"
                      />
                    </div>

                    <div class="mb-3 text-center grow">
                      <div class="p-4 text-sm font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                      </div>

                      <a href="#">
                        <button
                          class="text-sm font-medium bg-blue-200 hover:bg-blue-300 text-black px-2.5 py-1 rounded-xl border border-gray-400 dark:text-neutral-200">
                          getstarted
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- DEFAULT -->

                <!-- MENU UTAMA -->
                <div class="bg-sky-100 rounded-l-2xl">
                  <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                    <span class="ms-2.5 mb-6 tracking-wide font-bold text-base uppercase text-gray-800 text-center mt-4">
                      menu utama
                    </span>

                    <a href="#"
                      class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

                      <img src="/image/default.png"
                        alt="fe-menu"
                        class="size-5"
                      />

                      <div class="grow">
                        <div class="text-base font-bold text-gray-800">
                          HOME
                        </div>

                        <div class="text-[15px] font-medium text-gray-600 tracking-tight">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- MENU UTAMA -->

                <!-- EPLORE LAINNYA -->
                <div class="bg-sky-100 rounded-l-2xl">
                  <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                    <span class="ms-2.5 mb-6 tracking-wide font-bold text-base uppercase text-gray-800 text-center mt-4">
                      explore lainnya
                    </span>

                    <div href="#"
                      class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

                      <img src="/image/default.png"
                        alt="fe-menu"
                        class="size-5"
                      />

                      <div class="grow">
                        <div class="inline-flex items-center text-base font-bold text-gray-800 dark:text-neutral-200">
                          HOME
                        </div>

                        <div class="text-[15px] font-medium text-gray-600 dark:text-neutral-500 tracking-tight">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>

                        <div class="inline-flex items-center px-2 py-2 mt-2 text-sm font-medium border border-gray-400 hover:border-gray-500 rounded-lg leading-1 bg-red-200 text-red-800">
                          <a href="">
                            upcoming
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- EPLORE LAINNYA -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href=""
        class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
        rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
        About
      </a>
    </div>
    <!-- MENU WEB -->

    <!-- MENU AUTH -->
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
        <a href=""
          class="px-3.5 py-[3px] text-base font-semibold leading-6 text-gray-900 bg-blue-200 border border-gray-400 rounded-xl
          hover:bg-blue-300">
          Login
        </a>
      @endauth
    </div>
    <!-- MENU AUTH -->
  </nav>

  <div x-show="openSidebar"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opcity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-50"></div>
    <div class="fixed inset-y-0 right-0 z-50 w-full px-6 py-5 overflow-y-auto rounded-tl-3xl bg-sky-50 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <!-- MENU AUTH MOBILE -->
        <a href="{{ route('home') }}"
          class="-m-1.5 p-1.5">
          <img src="/frontend/img/logo/logo.jpg"
            alt="logo"
            class="w-8 h-8 rounded-full"
          />
        </a>

        <div>
          @auth
            <div id="dropdownHoverButtonn"
              data-dropdown-toggle="dropdownAuthh"
              data-dropdown-trigger="hover"
              class="flex items-center gap-x-1 tracking-wide justify-center py-[3px] text-base font-medium rounded-[13px] cursor-pointer">

              <picture>
                <img src="{{ Auth::user() && Auth::user()->image ?
                  asset('storage/' . Auth::user()->image) :
                  '/frontend/img/user/user.png' }}"
                  alt="user-default"
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

            <div id="dropdownAuthh"
              class="z-10 hidden p-4 border border-gray-300 divide-y divide-gray-100 shadow w-60 bg-sky-50 rounded-3xl">

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
            <a href=""
              class="px-3.5 mr-2.5 py-1 text-base font-semibold leading-6 text-gray-900 bg-blue-200 border border-gray-400 rounded-xl
              hover:bg-blue-300">
              Login
            </a>

            <a href=""
              class="px-3.5 py-1 text-base font-semibold leading-6 text-gray-900 bg-blue-200 border border-gray-400 rounded-xl
              hover:bg-blue-300">
              Register
            </a>
          @endauth
        </div>
        <!-- MENU AUTH MOBILE -->

        <button @click="openSidebar = false"
          type="button"
          class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <svg fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
            class="p-1 rounded-full w-7 h-7 hover:bg-red-500 hover:text-white hover:border hover:border-gray-600 cursor-pointer">
            <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- MENU MOBILE -->
      <div class="flow-root mt-10">
        <!-- DEFAULT -->
        <div class="-my-2 divide-y divide-gray-500/10">
          <div class="py-1.5 bg-sky-100 rounded-3xl border border-gray-300">
            <div class="flex flex-col p-2">
              <span class="ms-2.5 mb-4 tracking-wide font-bold text-base
                uppercase text-gray-800 dark:text-neutral-200
                text-center mt-4">
                default
              </span>

              <div class="inline-flex justify-center">
                <img src="/image/default.png"
                  alt="logo"
                  class="size-32"
                />
              </div>

              <div class="mb-3 text-center grow">
                <div class="p-4 text-base font-medium text-gray-700">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </div>

                <a href="">
                  <button
                    class="text-sm font-medium bg-blue-200 hover:bg-blue-300 text-black px-2.5 py-1 rounded-xl border border-gray-400 dark:text-neutral-200">
                    getstarted
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- DEFAULT -->

        <!-- MENU UTAMA -->
        <div class="mt-4 -my-2 divide-y divide-gray-500/10">
          <div class="py-2 space-y-2">
            <div class="block px-3 py-2 text-base font-bold text-gray-800 uppercase">
              menu utama
            </div>
          </div>

          <div class="py-1.5">
            <a href="#"
              class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

              <img src="/image/default.png"
                alt="fe-menu"
                class="size-5"
              />

              <div class="grow">
                <div class="text-base font-bold text-gray-800 dark:text-neutral-200">
                  HOME
                </div>

                <div class="text-[15px] font-medium text-gray-600 dark:text-neutral-500 tracking-tight">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- MENU UTAMA -->

        <!-- EXPLORE LAINNYA -->
        <div class="-my-2 divide-y divide-gray-500/10">
          <div class="py-2 space-y-2">
            <div class="block px-3 py-2 text-base font-bold text-gray-800 uppercase">
              explore lainnya
            </div>
          </div>

          <div class="py-1.5">
            <div class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
              <img src="/image/default.png"
                alt="fe-menu"
                class="size-5"
              />

              <div class="grow">
                <div class="inline-flex items-center text-base font-bold text-gray-800 dark:text-neutral-200">
                  Home
                </div>

                <div class="text-[15px] font-medium text-gray-600 dark:text-neutral-500 tracking-tight">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>

                <div class="inline-flex items-center px-2 py-2 mt-2 text-sm font-medium text-red-800 bg-red-200 border
                border-gray-400 hover:border-gray-500 rounded-lg leading-1">
                  <a href="">
                    upcoming
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- EXPLORE LAINNYA -->
      </div>
      <!-- MENU MOBILE -->
    </div>
  </div>
</header>
