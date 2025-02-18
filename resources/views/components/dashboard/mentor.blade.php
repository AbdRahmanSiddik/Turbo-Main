<div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Contact Details</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
                <div
                    class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                    <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                        <img src="{{ asset('img/profile/'.(auth()->user()->profile?->foto == 'default.png' ? '10302971.png' : auth()->user()->profile?->foto)) }}"
                            alt="Tailwise - Admin Dashboard Template">
                    </div>
                    <div class="text-center sm:ml-4 sm:text-left">
                        <div class="text-base font-medium">
                            {{ auth()->user()->name }}
                        </div>
                        {{ "Login: ".auth()->user()->last_login_at }}
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
                        <div class="text-slate-500">Jumlah Anggota</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">{{ auth()->user()->team?->peserta->count() ?? 'Belum atur team'}}</div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Nama Team</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">{{ auth()->user()->team->nama_team ?? 'Belum diatur' }}</div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Seluruh Kegiatan</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">{{ $kegiatans->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Anggota Team</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
                <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                    <div>Jumlah Anggota: {{ auth()->user()->team?->peserta->count() ?? 'Belum atur team' }}</div>

                </div>
                <div class="mb-5 flex flex-col gap-5 border-b border-dashed border-slate-300/70 pb-5">
                   @forelse (auth()->user()->team?->peserta ?? [] as $take)
                     <div class="flex items-center gap-3.5">
                         <div>
                             <div
                                 class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                 <img src="{{ asset('img/profile/'.($take->foto == 'default.png' ? '10302971.png' : $take->foto)) }}"
                                     alt="Tailwise - Admin Dashboard Template">
                             </div>
                         </div>
                         <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                             <div>
                                 <div class="font-medium">{{ $take->user->name }}</div>
                                 <div class="mt-0.5 text-xs text-slate-500">
                                    {{ $take->user->email }}
                                 </div>
                             </div>
                             <div class="relative sm:ml-auto">
                                {{ $take->telepon }}
                             </div>
                         </div>
                     </div>
                   @empty
                   <div>Belum ada anggota</div>
                   @endforelse
                </div>
                <div>
                    <div>Anggota Team</div>
                </div>
            </div>
        </div>
    </div>
</div>
