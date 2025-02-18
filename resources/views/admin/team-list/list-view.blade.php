@extends('layout.template')

@section('content')
  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Data Team Peserta
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
                    Nama Peserta
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Email
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Team Peserta
                  </td>
                  <td
                    class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Action
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($peserta as $key => $value)
                  <tr class="[&_td]:last:border-b-0">
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      {{ $loop->iteration }}
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex">
                        <div class="image-fit zoom-in h-9 w-9">
                          <img
                            src="{{ asset('img/profile' . ($value->profile?->foto == 'default.png' ? '/10302971.png' : $value->profile?->foto)) }}"
                            alt="Product Image"
                            class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                        </div>
                      </div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap font-medium">{{ $value->name }}</div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap font-medium">{{ $value->email }}</div>
                    </td>
                    <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      @if ($value->profile?->team != null)
                        <div class="flex items-center justify-center text-success">
                          <i data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                          <div class="ml-1.5 whitespace-nowrap">{{ $value->profile->team->nama_team }} - {{ $value->profile->team->mentor->name }}</div>
                        </div>
                      @else
                        <div class="flex items-center justify-center text-danger">
                          <i data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                          <div class="ml-1.5 whitespace-nowrap">Belum Diatur</div>
                        </div>
                      @endif
                    </td>
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                      <button data-tw-merge type="button" data-tw-toggle="modal"
                        data-tw-target="#header-footer-modal-preview{{ $value->id }}"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Atur
                        Team</button>
                    </td>
                  </tr>

                  <!-- BEGIN: Modal Content -->
                  <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="header-footer-modal-preview{{ $value->id }}"
                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                    <div data-tw-merge
                      class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                      <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">
                          Atur Team {{ $value->name }}
                        </h2>
                      </div>
                      <form action="{{ route('update.tim', $value->id) }}" method="POST">
                        @csrf
                          <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-12">
                              <label data-tw-merge for="modal-form-6"
                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                Team
                              </label>
                              <select data-tw-merge id="modal-form-6" name="team"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                <option selected disabled>Pilih Team</option>
                                @foreach ($teams as $item)
                                    <option value="{{ $item->id_team }}" {{ $value->profile?->team_id == $item->id_team ? 'selected' : '' }}>{{ $item->nama_team }} - {{ $item->mentor->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"><button
                              data-tw-merge data-tw-dismiss="modal" type="button"
                              class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                            <button data-tw-merge type="submit"
                              class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Submit</button>
                          </div>
                      </form>
                    </div>
                  </div>
                  <!-- END: Modal Content -->
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
