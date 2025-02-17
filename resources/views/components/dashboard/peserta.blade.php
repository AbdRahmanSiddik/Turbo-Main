<div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-12">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Contact Details</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
                <div
                    class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                    <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                        <img src="{{ asset('img/profile/'.(auth()->user()->profile->foto ?? '')) }}"
                            alt="Tailwise - Admin Dashboard Template">
                    </div>
                    <div class="text-center sm:ml-4 sm:text-left">
                        <div class="text-base font-medium">
                            {{ auth()->user()->name }}
                        </div>
                        @foreach (auth()->user()->getRoleNames() as $role)
                            <div class="mt-0.5 text-slate-500">
                                {{ ucfirst($role) }}
                            </div>
                        @endforeach
                    </div>
                    <div
                        class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                        <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50">
                        </div>
                        High priority
                    </div>
                </div>
                <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Leads Generated</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">2,176</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                11%
                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Deals Closed</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">2,027</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                2%
                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Meetings Scheduled</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">342</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                4%
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] ml-px h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-12">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Team Collaboration</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
                <div>
                    <div
                        class="flex w-full items-center rounded-lg border bg-slate-50 px-3 py-3 font-medium text-slate-500">
                        <i data-tw-merge="" data-lucide="kanban-square" class="w-5 h-5 mr-2 stroke-[1.3]"></i>
                        Project Details for Team Members
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-auto"><a
                                data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;"
                                class="cursor-pointer"><i data-tw-merge="" data-lucide="more-vertical"
                                    class="stroke-[1] w-5 h-5 fill-slate-500/70 stroke-slate-500/70"></i>
                            </a>
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
                                            src="{{ asset('img/kegiatan/'.$item->thumbnail) }}"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="-mt-1">
                                    <a class="block text-center font-medium sm:text-left" href="#">
                                        {{ $item->nama_kegiatan }}
                                    </a>
                                    <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                        <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                        <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                            href="#">
                                            {{--  --}}
                                        </a>
                                    </div>
                                    <div class="mt-4 flex items-center justify-center sm:justify-start">
                                        <div class="flex">

                                        </div>
                                        <div class="ml-3 text-xs text-slate-500">
                                            4+ Members
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-slate-500 mt-5">
                                Anda belum mendaftar ke kegiatan apapun. Silahkan daftar terlebih dahulu untuk melihat kegiatan yang tersedia!
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
