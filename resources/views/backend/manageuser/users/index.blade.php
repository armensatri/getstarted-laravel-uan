@extends('backend.template.main')

@section('content-backend')
  <div class="content">
    <div class="p-4 mx-auto">
      <section class="w-full px-2 mb-2">
        <div class="content-backend">
          <div class="content-backend-title">
            {{ $title }}
          </div>
        </div>
      </section>

      <div class="alert">
        @if (session()->has('alert'))
          @include('sweetalert::alert')
        @endif
      </div>

      <section class="w-full px-4 mt-8 mb-5">
        <div class="max-w-[85rem] mx-auto">
          <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto min-w-full">
              <div class="p-1.5 inline-block xl:max-w-full align-middle leading-none">
                {{-- @include('backend.sbreadcrumb.users.index') --}}

                <div class="overflow-hidden bg-white border border-gray-200 shadow-xs rounded-3xl">
                  <div class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center">
                    <div class="description">
                      <h2 class="text-lg font-bold tracking-wide text-gray-800 uppercase">
                        Users
                      </h2>

                      <p class="text-sm tracking-wide text-gray-600">
                        halaman {{ $users->currentPage() }}<span class="mx-[1px]">/</span>{{ $users->lastPage() }}...
                        <span class="ml-1">{{ $users->count() }}</span> data, total semua {{ $users->total() }} data
                      </p>
                    </div>

                    <div class="table-header">
                      <div class="inline-flex items-center gap-x-2">
                        <div class="refresh">
                          <a href="{{ route('users.index') }}">
                            <button class="inline-flex items-center px-3
                              py-1.5 text-sm
                              font-semibold text-white bg-blue-600 border border-transparent rounded-xl gap-x-2 hover:bg-blue-700 cursor-pointer">
                              <i class="bi bi-bootstrap-reboot"></i>
                            </button>
                          </a>
                        </div>

                        <div class="search">
                          <form action="/users">
                            <button type="button"
                              data-hs-overlay="#hs-slide-down-animation-modal"
                              class="inline-flex items-center px-3 py-1.5 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-xl gap-x-2 hover:bg-blue-700">
                              <i class="bi bi-search"></i>
                            </button>

                            <div id="hs-slide-down-animation-modal"
                              class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">

                              <div class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto">

                                <div class="flex flex-col p-3 bg-white shadow-sm
                                  pointer-events-auto rounded-[28px]">

                                  <div class="flex items-center justify-between px-4 py-3">
                                    <div class="text-xl font-bold tracking-normal text-gray-800">
                                      Search data
                                      <span class="text-blue-500">
                                        users
                                      </span>
                                    </div>

                                    <button type="button"
                                      data-hs-overlay="#hs-slide-down-animation-modal"
                                      class="flex items-center justify-center text-base font-semibold text-black rounded-full size-7 hover:bg-red-500 hover:text-white hover:border hover:border-gray-500">

                                      <span class="sr-only">Close</span>

                                      <svg xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="25"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="flex-shrink-0 size-4">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                      </svg>
                                    </button>
                                  </div>

                                  <div class="p-4 overflow-y-auto">
                                    <div class="max-w-full space-y-3">
                                      <div>
                                        <div class="relative">
                                          <input type="search"
                                            autofocus
                                            id="search"
                                            name="search"
                                            placeholder="Search data users"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-500 placeholder:tracking-wider placeholder:ps-1 placeholder:font-serif tracking-wide"
                                          />

                                          <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="flex items-center justify-end px-4 py-3 gap-x-2">
                                    <button type="submit"
                                      class="inline-flex items-center px-3.5 py-1 text-base font-semibold text-white bg-blue-600 border tracking-wide border-transparent rounded-xl gap-x-2 hover:bg-blue-700 disabled:opacity-50">
                                      Search
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                        <div class="backup">
                          <button type="button"
                            data-hs-overlay="#hs-vertically-centered-modal"
                            class="inline-flex items-center px-3 py-1.5 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-xl gap-x-2 hover:bg-blue-700 disabled:opacity-50">
                            <i class="bi bi-download"></i>
                          </button>

                          <div id="hs-vertically-centered-modal"
                            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">

                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100
                              hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">

                              <div class="p-3 flex flex-col w-full bg-white shadow-sm
                                pointer-events-auto rounded-[28px]">

                                <div class="flex items-center justify-between px-4 py-3">
                                  <div class="text-xl font-bold text-gray-800">
                                    Backup data
                                    <span class="text-blue-500">
                                      users
                                    </span>
                                  </div>

                                  <button type="button"
                                    data-hs-overlay="#hs-vertically-centered-modal"
                                    class="flex items-center justify-center text-base font-semibold text-black rounded-full hover:border hover:border-gray-500 hover:text-white hover:bg-red-500 size-7 disabled:opacity-50">

                                    <span class="sr-only">Close</span>

                                    <svg class="flex-shrink-0 size-4"
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="25"
                                      height="25"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path d="M18 6 6 18"></path>
                                      <path d="m6 6 12 12"></path>
                                    </svg>
                                  </button>
                                </div>

                                <div class="p-4 overflow-y-auto">
                                  <!-- START IMPORT -->
                                  {{-- <div class="py-3">
                                    <div class="mb-4 text-lg font-bold text-gray-800">
                                      <span class="text-blue-500">
                                        Import
                                      </span>
                                      data
                                    </div>

                                    <div class="flex ml-4 flex-start">
                                      <div class="grid grid-cols-2 gap-x-12">
                                        sql csv
                                        sql csv json excel pdf
                                        <div class="text-center">
                                          <a href="#">
                                            <div class="app-components-backup">
                                              <img src="/backend/img/backup/json.png"
                                                alt="image"
                                                class="w-10 h-10"
                                              />
                                            </div>
                                            <div class="app-components-backup-name">
                                              json
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div> --}}
                                  <!-- END IMPORT -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="button-create">
                          <a href="{{ route('users.create') }}">
                            <button type="button"
                              class="inline-flex items-center px-3 py-[7px] text-sm font-medium gap-1 tracking-wide text-black bg-blue-200 border border-gray-400 rounded-[13px] hover:bg-blue-600 hover:text-white cursor-pointer">
                              <i class="bi bi-plus-circle"></i>
                              user
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              no
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              id
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              image
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              name
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              role
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              email
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase">
                              url
                            </span>
                          </div>
                        </th>

                        <th scope="col" class="px-8 py-3 text-center">
                          <div class="flex items-center">
                            <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                              </svg>
                            </span>
                          </div>
                        </th>
                      </tr>
                    </thead>

                    <tbody class="tbody">
                      @foreach ($users as $user)
                        <tr>
                          <td class="h-px whitespace-nowrap">
                            <div class="flex justify-center">
                              <div class="flex items-center px-6 py-3 gap-x-3">
                                <span class="text-[15px] text-gray-600">
                                  {{ $loop->iteration . '.' }}
                                </span>
                              </div>
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="flex justify-center">
                              <div class="flex items-center px-6 py-3 gap-x-3">
                                <span class="text-[15px] text-gray-600">
                                  {{ $user->id }}
                                </span>
                              </div>
                            </div>
                          </td>

                          <td class="size-px whitespace-nowrap">
                            <div class="flex justify-center">
                              <div class="px-6 py-3">
                                <div class="flex items-center gap-x-2">
                                  @if ($user->image)
                                    <div class="hs-tooltip">
                                      <div class="rounded-full hs-tooltip-toggle hover:cursor-pointer">
                                        <img src="{{
                                          $user->image ? asset('storage/' . $user->image) :
                                          asset('/image/default.png') }}"
                                          alt="user-image"
                                          class="inline-block object-cover object-center rounded-full size-8"
                                        />

                                        <div
                                          class="absolute z-10 flex items-center justify-center invisible transition-opacity border border-gray-500 shadow-md opacity-0 bg-sky-50 rounded-3xl hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">

                                          <img src="{{
                                            $user->image ? asset('storage/' . $user->image) :
                                            asset('/image/default.png') }}"
                                            alt="user-image"
                                            class="p-2 h-[250px] w-[250px] rounded-3xl object-cover object-center"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                  @else
                                    <div class="hs-tooltip">
                                      <div
                                        class="inline-flex items-center justify-center rounded-full hs-tooltip-toggle">

                                        <img src="{{
                                          $user->image ? asset('storage/' . $user->image) :
                                          asset('/image/default.png') }}"
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
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="flex items-center px-6 py-3 gap-x-3">
                              <span class="text-[15px] text-gray-600">
                                {{ $user->name }}
                              </span>
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span class="py-0.5 px-[7px] inline-flex items-center gap-x-1 text-xs
                                font-medium {{ $user->role->bg }} {{ $user->role->text }} rounded-full tracking-wide border border-gray-400">
                                {{ $user->role->name }}
                              </span>
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="flex items-center px-6 py-3 gap-x-3">
                              <span class="text-[15px] text-gray-600">
                                {{ $user->email }}
                              </span>
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="flex items-center px-6 py-3 gap-x-3">
                              <span class="text-[15px] text-gray-600">
                                {{ $user->url }}
                              </span>
                            </div>
                          </td>

                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5">
                              <div class="m-1 hs-dropdown text-center
                                [--trigger:hover] relative inline-flex">

                                <div id="hs-dropdown-hover-event-{{ $user->id }}"
                                  aria-haspopup="menu"
                                  aria-expanded="false"
                                  aria-label="Dropdown"
                                  class="inline-flex items-center px-1 py-0.5 text-sm font-medium text-slate-900 cursor-pointer hs-dropdown-toggle
                                  hover:text-blue-600">
                                  <i class="bi bi-gear-fill"></i>
                                </div>

                                <div role="menu"
                                  aria-orientation="vertical"
                                  aria-labelledby="hs-dropdown-hover-event-{{ $user->id }}"
                                  class="hs-dropdown-menu transition-[opacity,margin] duration
                                  z-30 hs-dropdown-open:opacity-100 opacity-0 hidden min-w-max bg-slate-50 border border-gray-400 shadow-md rounded-2xl p-3 space-y-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full">

                                  <span class="block text-xs font-medium text-gray-800 uppercase">
                                    {{ $user->id }}
                                  </span>

                                  <span class="block mb-4 text-xs font-medium text-gray-600 uppercase">
                                    Actions
                                  </span>

                                  <div class="flex gap-2">
                                    <div>
                                      <a href="{{ route('users.show', $user->url) }}"
                                        class="inline-flex items-center justify-center px-3 py-1.5 bg-green-700 rounded-xl hover:bg-green-800">
                                        <i class="text-base text-white bi bi-eye"></i>
                                      </a>
                                    </div>

                                    <div>
                                      <a href="{{ route('users.edit', $user->url) }}"
                                        class="inline-flex items-center justify-center px-3 py-1.5 bg-blue-600 rounded-xl hover:bg-blue-700">
                                        <i class="text-base text-white bi bi-pencil-square"></i>
                                      </a>
                                    </div>

                                    <div>
                                      <form action="{{ route('users.destroy', $user->url) }}"
                                        method="POST">
                                        @method('delete')
                                        @csrf

                                        <button type="submit"
                                          onclick="return confirm('yakin menghapus data ini ?')"
                                          class="inline-flex items-center justify-center px-3 py-1.5 bg-red-600 hover:bg-red-700 rounded-xl">
                                          <i class="text-base text-white bi bi-trash3"></i>
                                        </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="grid gap-3 px-6 py-5 border-t border-gray-200 md:flex lg:justify-center md:items-center">
                    @if ($users->lastPage() > 1)
                      <x-pagination
                        :pagination="$users"
                      />
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
