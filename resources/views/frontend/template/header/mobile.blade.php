<div class="flow-root mt-10">
  <!-- DEFAULT -->
  <div class="-my-2 divide-y divide-gray-500/10">
    <div class="py-1.5 bg-sky-100 rounded-3xl border border-gray-300">
      <x-mobile-default
        nama-app="Nama app"
        :route="route('home')"
        :img="asset('image/default.png')"
        alt="logo-app-content"
        description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
      />
    </div>
  </div>

  <!-- MENU UTAMA -->
  <div class="mt-4 -my-2 divide-y divide-gray-500/10">
    <div class="py-2 space-y-2">
      <div class="block px-3 py-2 text-base font-bold text-gray-800 uppercase">
        menu utama
      </div>
    </div>

    <div class="py-1.5">
      <div class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
        <img src="{{ asset('/frontend/img/utama/home.png') }}"
          alt="fe-menu"
          class="size-5"
        />

        <div class="grow">
          <div class="text-base font-bold text-gray-800 mb-1">
            HOME
          </div>

          <div class="text-[15px] font-medium text-gray-600 tracking-tight">
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </div>

          <div class="inline-flex items-center px-2 py-1 mt-2
            text-xs font-medium border border-gray-500 hover:border-gray-600 rounded-[9px] leading-1 bg-blue-200 hover:bg-blue-700 hover:text-white text-black hover:drop-shadow-md tracking-wider">

            <a href="">
              Link app
              <i class="ml-1 bi bi-box-arrow-up-right text-xs"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- EXPLORE LAINNYA -->
  <div class="-my-2 divide-y divide-gray-500/10">
    <div class="py-2 space-y-2">
      <div class="block px-3 py-2 text-base font-bold
        text-gray-800 uppercase">
        explore lainnya
      </div>
    </div>

    <div class="py-1.5">
      <div class="flex px-5 py-3 rounded-2xl gap-x-4
        hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
        <img src="{{ asset('/frontend/img/utama/home.png') }}"
          alt="fe-menu"
          class="size-5"
        />

        <div class="grow">
          <div class="inline-flex items-center text-base font-bold text-gray-800 mb-1">
            HOME
          </div>

          <div class="text-[15px] font-medium text-gray-600 dark:text-neutral-500 tracking-tight">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </div>

          <div class="inline-flex items-center px-2 py-1 mt-2
            text-xs font-medium border border-gray-500 hover:border-gray-600 rounded-[9px] leading-1 bg-blue-200 hover:bg-blue-700 hover:text-white text-black hover:drop-shadow-md tracking-wider">

            <a href="">
              Link app
              <i class="ml-1 bi bi-box-arrow-up-right text-xs"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
