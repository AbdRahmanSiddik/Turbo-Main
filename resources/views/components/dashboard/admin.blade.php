<div class="box box--stacked mt-3.5  flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row">
  <div class="grid w-full grid-cols-4 gap-2 ">

    @foreach ($kegiatans as $get)
      @if ($get->status != 'selesai')
        <div
          class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
          <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
            <i data-tw-merge="" data-lucide="app-window" class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
          </div>

          <div class="mt-12 flex items-center">
            <div class="text-2xl font-medium">{{ $get->nama_kegiatan }}</div>
          </div>
          <div class="mt-1 flex items-center">
            <div
              class=" flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
              {{ $get->pendaftaran->count() }} peserta
            </div>
          </div>

        </div>
      @endif
    @endforeach

  </div>
  <a class="flex flex-col items-center justify-center rounded-[0.6rem] border border-dashed border-slate-300/80 bg-slate-50 p-5 text-slate-400/80 hover:bg-slate-50 xl:w-20 [&:hover_svg]:rotate-180"
    href="{{ route('kegiatan.index') }}">
    <i data-tw-merge="" data-lucide="plus-square" class="stroke-[1] h-6 w-6 transform transition-transform"></i>
  </a>
</div>

<div class="grid grid-cols-12 gap-x-6 gap-y-10 mt-10">
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
      <div>
        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
          <div class="text-base font-medium">Contact Details</div>
        </div>
        <div class="box box--stacked mt-3.5 p-5">
          <div class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
            <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
              <img src="{{ asset('img/profile/'.(auth()->user()->profile?->foto == 'default.png' ? '10302971.png' : auth()->user()->profile?->foto)) }}" alt="Tailwise - Admin Dashboard Template">
            </div>
            <div class="text-center sm:ml-4 sm:text-left">
              <div class="text-base font-medium">
                {{ auth()->user()->name }}
              </div>
              <div class="mt-0.5 text-slate-500">
                {{ "Login: ".auth()->user()->last_login_at }}
              </div>
            </div>
                <div
                  class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                  <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50"></div>
                  {{ ucfirst($item) }}
                </div>
          </div>
          <div class="flex flex-col gap-y-3 text-center sm:flex-row">
            <div class="flex-1 border-dashed last:border-0 sm:border-r">
              <div class="text-slate-500">Seluruh Kegiatan</div>
              <div class="mt-1 flex items-center justify-center">
                <div class="text-base font-medium">{{ $kegiatans->count() }}</div>
              </div>
            </div>
            <div class="flex-1 border-dashed last:border-0 sm:border-r">
              <div class="text-slate-500">Seluruh Team</div>
              <div class="mt-1 flex items-center justify-center">
                <div class="text-base font-medium">{{ $teams->count() }}</div>
              </div>
            </div>
            <div class="flex-1 border-dashed last:border-0 sm:border-r">
              <div class="text-slate-500">Seluruh Peserta</div>
              <div class="mt-1 flex items-center justify-center">
                <div class="text-base font-medium">{{ $peserta->count() }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
              <div class="text-base font-medium">Operator</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
              <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                <div>Akses Operator</div>
              </div>
              <div class="mb-5 flex flex-col gap-5 border-b border-dashed border-slate-300/70 pb-5">
                @foreach ($operators as $value)
                    <div class="flex items-center gap-3.5">
                      <div>
                        <div class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                          <img src="{{ asset('img/profile/'.($value->profile?->foto == 'default.png' ? '10302971.png' : $value->profile?->foto)) }}" alt="Tailwise - Admin Dashboard Template">
                        </div>
                      </div>
                      <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                        <div>
                          <div class="font-medium">{{ $value->name }}</div>
                          <div class="mt-0.5 text-xs text-slate-500">
                            {{ $value->email }}
                          </div>
                        </div>
                        <div class="relative sm:ml-auto">
                            {{ $value->profile->telepon ?? '' }}
                        </div>
                      </div>
                    </div>
                @endforeach
              </div>
              <div>
                <div>Akses Operator</div>

              </div>
            </div>
          </div>
    </div>
</div>
