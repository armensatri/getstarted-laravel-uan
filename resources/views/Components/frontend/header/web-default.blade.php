<span class="ms-2.5 mb-4 tracking-wide font-bold text-base
  uppercase text-gray-800 text-center mt-4">
  Explore
</span>

<div class="inline-flex justify-center">
  <img src="{{ $img }}"
    alt="{{ $alt }}"
    class="size-32"
  />
</div>

<div class="mb-3 text-center grow">
  <div class="p-4 text-sm font-medium text-gray-700">
    {{ $description }}
  </div>

  <a href="{{ $route }}">
    <button
      class="text-sm font-medium bg-blue-200 hover:bg-blue-300 text-black px-2.5 py-1 rounded-xl border border-gray-400 dark:text-neutral-200 cursor-pointer">
      getstarted
    </button>
  </a>
</div>
