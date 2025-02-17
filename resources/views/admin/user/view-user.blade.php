@extends('layout.template')

@section('breadcrumb')
  <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
    <ol class="flex items-center text-theme-1 dark:text-slate-300">
      <li class="">
        <a href="/">User Management</a>
      </li>
      <li
        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
        <a href="#">{{ $title }}</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Data {{ $title }}
        </div>
        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
          <a data-tw-merge="" role="button" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
            <i data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
            Add New {{ $title }}
          </a>

          <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="superlarge-modal-size-preview"
            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge
              class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600    sm:w-[600px] lg:w-[900px] p-10 text-center">
              <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Profile Picture</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Optional
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Upload a profile picture for the user.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <input type="file" name="profile_picture" id="profile_picture" class="hidden" accept="image/*"
                          onchange="previewImage(event)">
                        <label for="profile_picture" class="cursor-pointer">
                          <img id="profile_picture_preview" src="{{ asset('img/default-profile.png') }}"
                            alt="Profile Picture Preview"
                            class="h-20 w-20 rounded-full border border-slate-200 shadow-sm">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Role</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Enter the role as it appears on this user
                          official identification.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <select data-placeholder="Pilih Role" multiple="multiple" name="roles[]"
                          class="tom-select w-full">
                          @foreach (Spatie\Permission\Models\Role::all() as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Nama Lengkap</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Enter your full legal name as it appears on your
                          official identification.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <input data-tw-merge="" type="text" name="name"
                          class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Email</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          This information is required to verify your email.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <input data-tw-merge="" type="email" name="email"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Nomor Telepon</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Please provide a valid phone number where we can reach
                          you if needed.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <input data-tw-merge="" type="number" name="telepon" placeholder="08123456789"
                          class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Alamat</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Enter the postal code or ZIP code associated with your
                          address.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <input data-tw-merge="" type="text" placeholder="Jl. ..." name="alamat"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                    </div>
                  </div>
                </div>
                <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                  <button data-tw-merge="" type="button" data-tw-dismiss="modal"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-danger focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-danger dark:border-danger [&:hover:not(:disabled)]:bg-danger/10 w-full border-danger/50 px-4 md:w-auto mr-2">Close
                  </button>
                  <button data-tw-merge="" type="submit"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-4 md:w-auto">Save
                    Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3.5 flex flex-col gap-8">
        <div class="box box--stacked flex flex-col">
          <div class="overflow-auto xl:overflow-visible">
            <table id="myTable" class="w-full text-left border-b border-slate-200/60">
              <thead class="">
                <tr>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    No
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Avatar
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Nama
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Email
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Telepon
                  </td>
                  @if ($title == 'Mentor')
                    <td
                      class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                      Team
                    </td>
                  @endif
                  <td
                    class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Action
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $value)
                  <tr class="[&_td]:last:border-b-0">
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      {{ $loop->iteration }}
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex">
                        <div class="image-fit zoom-in h-9 w-9">
                          <img src="{{ asset('img/profile/' . ($value->profile->foto ?? '')) }}" alt="Product Image"
                            class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                        </div>
                      </div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap font-medium">{{ $value->name }}</div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap">{{ $value->email }}</div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap">{{ $value->profile->telepon ?? '' }}</div>
                    </td>
                    {{-- @dd($role) --}}
                    @if ($title == 'Mentor')
                      <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                        @forelse ($value->team as $get)
                          <div class="flex items-center justify-center text-success">
                            <i data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                            <div class="ml-1.5 whitespace-nowrap">{{ $get->nama_team }}</div>
                          </div>
                        @empty
                          <div class="flex items-center justify-center text-danger">
                            <i data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                            <div class="ml-1.5 whitespace-nowrap">Belum Diatur</div>
                          </div>
                        @endforelse
                      </td>
                    @endif
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex items-center justify-center">
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5">
                          <button data-tw-toggle="dropdown" aria-expanded="false"
                            class="cursor-pointer h-5 w-5 text-slate-500">
                            <i data-tw-merge="" data-lucide="more-vertical"
                              class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                          </button>
                          <div data-transition="" data-selector=".show"
                            data-enter="transition-all ease-linear duration-150"
                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                            data-leave="transition-all ease-linear duration-150"
                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                            class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" role="button" data-tw-toggle="modal" data-tw-target="#update-user-modal{{ $value->id }}"
                              class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                              <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"
                                href="javascript:void(0);" >
                                <i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Edit
                              </a>
                              <a data-tw-merge="" data-tw-toggle="modal" data-tw-target="#delete{{ $value->id }}"
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                <i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Hapus
                              </a>
                              <!-- BEGIN: Modal Content -->
                              <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                id="delete{{ $value->id }}"
                                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                <div data-tw-merge
                                  class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                  <div class="p-5 text-center">
                                    <i data-tw-merge data-lucide="x-circle"
                                      class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-danger mx-auto mt-3 h-16 w-16 text-danger"></i>
                                    <div class="mt-5 text-3xl">Apakah Anda yakin?</div>
                                    <div class="mt-2 text-slate-500">
                                      Apakah Anda benar-benar ingin menghapus data
                                      {{ $value->nama_kegiatan }}? <br>
                                      Proses ini tidak dapat dibatalkan.
                                    </div>
                                  </div>
                                  <div class="px-5 pb-8 text-center">

                                    <form action="{{ route('user.destroy', $value->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button data-tw-merge data-tw-dismiss="modal" type="button"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24 mr-1 w-24">
                                        Batal
                                      </button>
                                      <button type="submit"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">
                                        Hapus
                                      </button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- END: Modal Content -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!-- Update User Modal -->
                  <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="update-user-modal{{ $value->id }}"
                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                    <div data-tw-merge
                      class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10 text-center">
                      <form id="update-user-form" method="POST" enctype="multipart/form-data" action="{{ route('user.update', $value->id) }}" method="POST">
                        @csrf
                        <div>
                          <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Profile Picture</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Optional
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      Upload a profile picture for the user.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <div class="flex flex-col items-center md:flex-row">
                                    <input type="file" name="profile_picture" id="profile_picture{{ $value->id }}" class="hidden"
                                      accept="image/*" onchange="previewMyImage(event, {{ $value->id }})">
                                    <label for="profile_picture{{ $value->id }}" class="cursor-pointer">
                                      <img id="myPreview{{ $value->id }}" src="{{ asset('img/profile/'.($value->profile->foto ?? '')) }}"
                                        alt="Profile Picture Preview"
                                        class="h-20 w-20 rounded-full border border-slate-200 shadow-sm">
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Role</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      Enter the role as it appears on this user
                                      official identification.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <div class="flex flex-col items-center md:flex-row">
                                    <select data-placeholder="Pilih Role" multiple="multiple" name="roles[]"
                                      class="tom-select w-full">
                                      @foreach (Spatie\Permission\Models\Role::all() as $role)
                                        <option value="{{ $role->name }}" {{ $value->roles->contains('name', $role->name) ? 'selected' : '' }}>
                                          {{ $role->name }}
                                        </option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Nama Lengkap</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      Enter your full legal name as it appears on your
                                      official identification.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <div class="flex flex-col items-center md:flex-row">
                                    <input data-tw-merge="" type="text" name="name" value="{{ $value->name }}"
                                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                                  </div>
                                </div>
                              </div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Email</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      This information is required to verify your email.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <input data-tw-merge="" type="email" name="email" value="{{ $value->email }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                                </div>
                              </div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Nomor Telepon</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      Please provide a valid phone number where we can reach
                                      you if needed.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <div class="flex flex-col items-center md:flex-row">
                                    <input data-tw-merge="" type="number" name="telepon" placeholder="08123456789" value="{{ $value->profile->telepon ?? '' }}"
                                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                                  </div>
                                </div>
                              </div>
                              <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                  <div class="text-left">
                                    <div class="flex items-center">
                                      <div class="font-medium">Alamat</div>
                                      <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                      </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                      Enter the postal code or ZIP code associated with your
                                      address.
                                    </div>
                                  </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                  <input data-tw-merge="" type="text" placeholder="Jl. ..." name="alamat" value="{{ $value->profile->alamat ?? '' }}"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                </div>
                              </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                              <button data-tw-merge="" type="button" data-tw-dismiss="modal"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-danger focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-danger dark:border-danger [&:hover:not(:disabled)]:bg-danger/10 w-full border-danger/50 px-4 md:w-auto mr-2">Close
                              </button>
                              <button data-tw-merge="" type="submit"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-4 md:w-auto">Save
                                Changes</button>
                            </div>
                          </form>
                        </div>
                      </form>
                    </div>
                  </div>
                  <script>
                    function previewMyImage(event, userId) {
                      const reader = new FileReader();
                      reader.onload = function() {
                        const output = document.getElementById('myPreview' + userId);
                        output.src = reader.result;
                      };
                      reader.readAsDataURL(event.target.files[0]);
                    }
                  </script>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('profile_picture_preview');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
@endsection
