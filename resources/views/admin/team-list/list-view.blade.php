@extends('layout.template')

@section('content')
  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Data Team
        </div>
        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
          <a data-tw-merge="" href="{{ route('kegiatan.create') }}"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
            <i data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
            Add New Kegiatan
          </a>
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
                    Nama Team
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Jumlah Peserta
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Action
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($teams as $key => $value)
                  <tr class="[&_td]:last:border-b-0">
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      {{ $loop->iteration }}
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex">
                        <div class="image-fit zoom-in h-9 w-9">
                          <img src="{{ asset('img/team/' . $value->avatar) }}" alt="Product Image"
                            class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                        </div>
                      </div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap font-medium">{{ $value->nama_team }}</div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap">{{ $value->peserta->count() }}</div>
                    </td>
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
                            <div data-tw-merge=""
                              class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                              <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"
                                href="{{ route('kegiatan.edit', $value->token_team) }}">
                                <i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Edit
                              </a>
                              <a data-tw-merge="" data-tw-toggle="modal"
                                data-tw-target="#delete{{ $value->token_team }}"
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                <i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Hapus
                              </a>
                              <!-- BEGIN: Modal Content -->
                              <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                id="delete{{ $value->token_team }}"
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
                                    <button data-tw-merge data-tw-dismiss="modal" type="button"
                                      class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24 mr-1 w-24">
                                      Batal
                                    </button>
                                    <a data-tw-merge href="{{ route('kegiatan.destroy', $value->token_team) }}"
                                      class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24 w-24">
                                      Hapus
                                    </a>
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
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
