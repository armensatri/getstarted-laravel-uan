@extends('backend.template.main')

@section('content-backend')
<div class="content">
          <div class="p-4 mx-auto">
            <section class="w-full px-2 mb-2">
              <div class="flex-nowrap w-full bg-white drop-shadow-xs
                p-4 mt-[-50px] flex items-center justify-center rounded-lg">
                <div class="px-8 py-1 text-base sm:text-xl font-normal tracking-wide text-white bg-green-700 rounded-full drop-shadow-xs">
                  {{ $title }}
                </div>
              </div>
            </section>

            <section class="w-full px-4 mt-8 mb-5">
              {{-- content backend --}}
            </section>
          </div>
        </div>
@endsection
