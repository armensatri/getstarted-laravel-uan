<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- VITE TAILWIND CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DEFAULT FONT INTER -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- ICON BOOTSTRAP -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />

    <!-- ICON FONTAWESOME -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
  </head>

  <body x-data="{
    page: 'ecommerce',
    'stickyMenu': false,
    'sidebarToggle': false,
    'scrollTop': false
    }">

    <div class="flex h-screen overflow-hidden bg-slate-100">
      <!-- SIDEBAR -->
      {{-- @include('backend.template.sidebar') --}}
      <sidebar @click.outside="sidebarToggle = false"
        :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
        class="absolute top-0 left-0 z-50 flex flex-col w-64 h-screen overflow-y-hidden duration-300 ease-linear hover:overflow-y-scroll bg-slate-50 dark:bg-boxdark lg:static lg:translate-x-0 drop-shadow-md">

        <div class="flex flex-col duration-300 ease-linear no-scrollbar">
          <div class="flex justify-center py-5">
            <div class="px-3 py-[7px] text-base font-normal leading-none
              tracking-wide text-white bg-green-700 rounded-full">
              App name
            </div>
          </div>

          @auth
            <div class="mt-2">
              <ul>
                @foreach ($menus as $menu)
                  <x-menu
                    sm="{{ $menu->sm }}"
                    menu="{{ $menu->name }}"
                  />
                  @foreach ($menu->submenus as $submenu)
                    <li class="px-2">
                      <a href="{{ $submenu->routename }}"
                        class="{{ Request::is($submenu->active) ? $submenu->active : '' }}
                        inline-flex items-center p-2 hover:bg-gradient-to-r hover:via-red-100 hover:from-gray-50 hover:to-green-100 hover:rounded-full">

                        <span class="text-xs text-blue-700">
                          @if (Auth::user()?->role?->submenus?->contains('name', $submenu->name))
                            <i class="bi bi-check2 text-[12px] text-green-600"></i>
                          @else
                            <i class="bi bi-x text-[12px] text-red-600"></i>
                          @endif
                        </span>

                        <img src="{{ asset(\App\Enums\MenuIcon::get($submenu->name)) }}"
                          alt="icon"
                          class="w-[16px] h-[16px] ml-2 mr-2"
                        />

                        <div>
                          <span class="text-[10px] text-black">
                            {{ $submenu->ssm }}
                          </span>
                          <span class="text-[16px] font-normal tracking-wide text-blue-600">
                            {{ $submenu->name }}
                          </span>
                        </div>

                        <span class="ml-2">
                          @if(Request::is($submenu->active))
                            <svg xmlns="http://www.w3.org/2000/svg"
                              width="14"
                              height="14"
                              fill="currentColor"
                              viewBox="0 0 16 16"
                              class="text-green-700 bi bi-check2-circle">
                              <path d="M2.5 8a5.5 5.5 0 0 1
                                8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5
                                8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                              />

                              <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8
                                9.293 5.354 6.646a.5.5 0 1 0-.708.708l3
                                3a.5.5 0 0 0 .708 0z"
                              />
                            </svg>
                          @endif
                        </span>
                      </a>
                    </li>
                  @endforeach
                @endforeach
              </ul>

              <div class="px-5 mx-auto mt-8 mb-8">
                <div class="flex justify-center">
                  <button type="button"
                    class="w-full px-2 py-3 text-sm font-normal tracking-wider text-center text-white bg-blue-600 rounded-xl drop-shadow-md">
                    <span class="font-sans">
                      010123{{ date('y') }}
                    </span>
                  </button>
                </div>
              </div>
            </div>
          @endauth
        </div>
      </sidebar>
      <!-- SIDEBAR -->

      <div class="relative flex flex-col flex-1 overflow-x-hidden">
        <!-- NAVBAR -->
        {{-- @include('backend.template.navbar') --}}
        <!-- NAVBAR -->

        <!-- CONTENT-BACKEND -->
        {{-- @yield('content-backend') --}}
        <!-- CONTENT-BACKEND -->
      </div>
    </div>

    <!-- JS BACKEND -->
    <script src="/backend/js/backend.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
