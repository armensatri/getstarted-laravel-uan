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

      <section class="w-full px-3 mt-8 mb-5">
        <div class="w-full">
          <div class="breadcrumb">
            @include('backend.sbreadcrumb.users.create')
          </div>

          <form action="{{ route('users.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="x-border">
              <div class="gap-8 max-auto md:flex">
                <x-input
                  label-for="name"
                  label-name="User..name"
                  type="text"
                  id="name"
                  name="name"
                  value-old="name"
                  value-default=""
                  error="name"
                  placeholder="Masukkan nama user"
                />

                <x-input
                  label-for="username"
                  label-name="User..username"
                  type="text"
                  id="username"
                  name="username"
                  value-old="username"
                  value-default=""
                  error="username"
                  placeholder="Masukkan username user"
                />
              </div>

              <div class="gap-8 max-auto md:flex">
                <x-input
                  label-for="email"
                  label-name="User..email"
                  type="text"
                  id="email"
                  name="email"
                  value-old="email"
                  value-default=""
                  error="email"
                  placeholder="Masukkan email user"
                />

                <x-input-select/>
              </div>

              <div class="gap-8 max-auto md:flex">

              </div>

              <div class="gap-8 max-auto md:flex">

              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
@endsection
