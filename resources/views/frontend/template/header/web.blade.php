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
                <x-web-default
                  :route="route('home')"
                  :img="asset('image/default.png')"
                  alt="logo-app-content"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                />
              </div>
            </div>

            <!-- MENU UTAMA -->
            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-web-menu-utama
                  :route="route('home')"
                  :img="asset('/frontend/img/utama/home.png')"
                  alt="home"
                  menu="HOME"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                />
              </div>
            </div>

            <!-- EPLORE LAINNYA -->
            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-web-explore-lainnya
                  :route="route('home')"
                  :img="asset('/frontend/img/utama/home.png')"
                  alt="home"
                  menu="APP PROJECT"
                  description="Kunjungi aplikasi project membuat studi kasus nyata"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="{{ route('home') }}"
    class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
    rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
    About
  </a>
</div>
