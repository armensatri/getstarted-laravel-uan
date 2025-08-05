<span class="ms-2.5 mb-6 tracking-wide font-bold text-base uppercase text-gray-800 text-center mt-4">
  explore lainnya
</span>

<div class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

  <img src="{{ $img }}"
    alt="{{ $alt }}"
    class="size-5"
  />

  <div class="grow">
    <div class="inline-flex items-center text-base font-bold
      text-gray-800 mb-1">
      {{ $menu }}
    </div>

    <div class="text-[15px] font-medium text-gray-700">
      {{ $description }}
    </div>

    {{-- jika ada status --}}
    <div class="inline-flex items-center px-2 py-1 mt-2
      text-xs font-medium border border-gray-400 hover:border-gray-500 rounded-lg leading-1 bg-blue-200 hover:bg-blue-700 hover:text-white text-blue-900 hover:drop-shadow-md">
      <a href="{{ $route }}">
        Explore
        <i class="ml-1 bi bi-box-arrow-up-right text-xs"></i>
      </a>
    </div>
  </div>
</div>
