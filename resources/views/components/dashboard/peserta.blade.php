<div class="grid grid-cols-12 gap-x-6 gap-y-10">
  <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
    <div>
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium">Contact Details</div>
      </div>
      <div class="box box--stacked mt-3.5 p-5">
        <div class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
          <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
            <img
              src="{{ asset('img/profile/' . (auth()->user()->profile?->foto == 'default.png' ? '10302971.png' : auth()->user()->profile?->foto)) }}"
              alt="Tailwise - Admin Dashboard Template">
          </div>
          <div class="text-center sm:ml-4 sm:text-left">
            <div class="text-base font-medium">
              {{ auth()->user()->name }}
            </div>
            {{ 'Login: ' . auth()->user()->last_login_at }}
          </div>
          <div
            class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
            <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50">
            </div>
            {{ ucfirst($item) }}
          </div>
        </div>
        <div class="flex flex-col gap-y-3 text-center sm:flex-row">
          <div class="flex-1 border-dashed last:border-0 sm:border-r">
            <div class="text-slate-500">Pelatihan diikuti</div>
            <div class="mt-1 flex items-center justify-center">
              <div class="text-base font-medium">{{ $peserta_kegiatan->count() }}</div>
            </div>
          </div>
          <div class="flex-1 border-dashed last:border-0 sm:border-r">
            <div class="text-slate-500">Anggota Team</div>
            <div class="mt-1 flex items-center justify-center">
              <div class="text-base font-medium">{{ auth()->user()->profile->team?->nama_team ?? 'Team Belum diatur' }}
              </div>
            </div>
          </div>
          <div class="flex-1 border-dashed last:border-0 sm:border-r">
            <div class="text-slate-500">Mentor</div>
            <div class="mt-1 flex items-center justify-center">
              <div class="text-base font-medium">
                @if (auth()->user()->profile->team != null )
                <div class="text-center">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#button-modal-preview" href="#" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">{{ ucfirst(auth()->user()->profile->team?->mentor->name) }}</a>
                </div>
                <!-- END: Modal Toggle -->
                <!-- BEGIN: Modal Content -->
                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="button-modal-preview" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                    <div data-tw-merge class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                        <a class="absolute right-0 top-0 mr-3 mt-3" data-tw-dismiss="modal" href="#">
                            <i data-tw-merge data-lucide="x" class="stroke-[1] w-5 h-5 h-8 w-8 text-slate-400 h-8 w-8 text-slate-400"></i>
                        </a>
                        <div class="p-5 text-center">
                            <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70 items-center justify-center inline-flex">
                                <img
                                  src="{{ asset('img/profile/' . (auth()->user()->profile->team?->mentor->profile->foto == 'default.png' ? '10302971.png' : auth()->user()->profile->team?->mentor->profile->foto)) }}"
                                  alt="Tailwise - Admin Dashboard Template">
                              </div>
                            <div class="mt-5 text-3xl">{{ ucfirst(auth()->user()->profile->team?->mentor->name) }}
                                -
                                {{ ucfirst(auth()->user()->profile->team?->mentor->profile->telepon) }}
                            </div>
                            <div class="mt-2 text-slate-500">
                                Hubungi mentor anda untuk dimasukkan ke dalam grub chat WhatsApp
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Ok</button>
                        </div>
                    </div>
                </div>
                @else
                <div>Belum diatur</div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
    <div>
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium">Team Collaboration</div>
      </div>
      <div class="box box--stacked mt-3.5 p-5">
        <div>
          <div class="flex w-full items-center rounded-lg border bg-slate-50 px-3 py-3 font-medium text-slate-500">
            <i data-tw-merge="" data-lucide="kanban-square" class="w-5 h-5 mr-2 stroke-[1.3]"></i>
            Project Details for Team Members
            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-auto"><a
                data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;" class="cursor-pointer"><i
                  data-tw-merge="" data-lucide="more-vertical"
                  class="stroke-[1] w-5 h-5 fill-slate-500/70 stroke-slate-500/70"></i>
              </a>
              <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                  class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Copy Link</a>
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Delete</a>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-3 flex flex-col gap-3">
            @forelse ($peserta_kegiatan as $item)
              <div
                class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                <div>
                  <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                    <img class="rounded-md saturate-[0.7]"
                      src="{{ asset('img/kegiatan/' . $item->kegiatan->thumbnail) }}"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                </div>
                <div class="-mt-1">
                  <a class="block text-center font-medium sm:text-left" href="#">
                    {{ $item->kegiatan->nama_kegiatan }}
                  </a>
                  <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                    <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                    <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                      href="#">
                      Mulai: {{ $item->kegiatan->tanggal_mulai }}
                    </a>
                  </div>
                  <div class="mt-4 flex items-center justify-center sm:justify-start">
                    <div class=" text-xs text-slate-500">
                        Status pendaftaran:
                        @if ($item->status == 'pending')
                            <span class="text-warning">Pending</span>
                        @elseif ($item->status == 'diterima')
                            <span class="text-success">Diterima</span>
                        @elseif ($item->status == 'hadir')
                            <span class="text-blue-500">Hadir</span>
                        @elseif ($item->status == 'alpa')
                            <span class="text-danger">Alpa</span>
                        @else
                            <span>{{ $item->status }}</span>
                        @endif
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="text-center text-slate-500 mt-5">
                Anda belum mendaftar ke kegiatan apapun. Silahkan daftar terlebih dahulu untuk melihat kegiatan yang
                tersedia!
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
