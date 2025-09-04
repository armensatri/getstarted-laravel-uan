<div class="flex justify-center">
  <div class="px-6 py-3">
    <div class="flex items-center gap-x-2">
      @if ($asset)
        <div class="hs-tooltip">
          <div class="rounded-full hs-tooltip-toggle hover:cursor-pointer">
            <img src="{{
              $asset ? asset('storage/' . $asset) :
              asset($assetDefault) }}"
              alt="user-image"
              class="inline-block object-cover object-center rounded-full size-8"
            />

            <div role="tooltip"
              class="absolute z-10 flex items-center justify-center invisible transition-opacity border border-gray-500 shadow-md opacity-0 bg-sky-50 rounded-3xl hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible">

              <img src="{{
                $asset ? asset('storage/' . $asset) :
                asset($assetDefault) }}"
                alt="user-image"
                class="p-2 h-[250px] w-[250px] rounded-3xl object-cover object-center"
              />
            </div>
          </div>
        </div>
      @else
        <div class="hs-tooltip">
          <div class="inline-flex items-center justify-center rounded-full hs-tooltip-toggle">

            <img src="{{
              $asset ? asset('storage/' . $asset) :
              asset($assetDefault) }}"
              alt="user-image"
              class="object-cover object-center rounded-full size-8"
            />

            {{-- <div
              class="absolute z-10 flex items-center justify-center invisible transition-opacity border border-gray-500 shadow-md opacity-0 bg-sky-50 rounded-3xl hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">

              <img src="{{
                $asset ? asset('storage/' . $asset) :
                asset($assetDefault) }}"
                alt="user-image"
                class="p-2 h-[250px] w-[250px] rounded-3xl"
              />
            </div> --}}
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
