<span class="ms-2.5 mb-6 tracking-wide font-bold text-base
  uppercase text-gray-800 text-center mt-4">
  menu utama
</span>

<a href="{{ $route }}"
  class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

  <img src="{{ $img }}"
    alt="{{ $alt }}"
    class="size-5"
  />

  <div class="grow">
    <div class="text-base font-bold text-gray-800 mb-1">
      {{ $menu }}
    </div>

    <div class="text-[15px] font-medium text-gray-700">
      {{ $description }}
    </div>
  </div>
</a>
