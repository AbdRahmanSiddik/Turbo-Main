@extends('layout.template')

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
        <ol class="flex items-center text-theme-1 dark:text-slate-300">
            <li class="">
                <a href="/">Dashboard</a>
            </li>
            <li
                class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
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
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    {{ $title }}
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="relative col-span-12 flex flex-col gap-y-7">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="preview-component">
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Form Tambah
                                </div>
                            </div>
                            <div>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">{{ $title }}</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                            <!-- BEGIN: Validation Form -->
                                            <form class="validate-form" action="{{ route('kegiatan.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-form [&.has-error_.form-control]:border-danger">
                                                    <label data-tw-merge="" for="nama_kegiatan"
                                                        class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                                                        Judul Kegiatan
                                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                                            Required
                                                        </span>
                                                    </label>
                                                    <input data-tw-merge="" id="nama_kegiatan" name="nama_kegiatan"
                                                        type="text" placeholder="Masukkan judul kegiatan..."
                                                        required="required"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control">
                                                </div>
                                                <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                                                    <label data-tw-merge="" for="tanggal_mulai"
                                                        class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                                                        Tanggal Mulai
                                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                                            Required
                                                        </span>
                                                    </label>
                                                    <input data-tw-merge="" id="tanggal_mulai" name="tanggal_mulai"
                                                        type="datetime-local" placeholder="example@gmail.com"
                                                        required="required"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control">
                                                </div>
                                                <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                                                    <label data-tw-merge="" for="tanggal_akhir"
                                                        class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                                                        Tanggal Akhir
                                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                                            Required
                                                        </span>
                                                    </label>
                                                    <input data-tw-merge="" id="tanggal_akhir" name="password"
                                                        type="datetime-local" placeholder="secret" required="required"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control">
                                                </div>
                                                <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                                                    <label data-tw-merge="" for="deskripsi"
                                                        class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                                                        Deskripsi
                                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                                            Required
                                                        </span>
                                                    </label>
                                                    <textarea data-tw-merge="" id="deskripsi" name="deskripsi" placeholder="Isi deskripsi..." minlength="10"
                                                        required="required"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control"></textarea>
                                                </div>
                                                <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                                                    <label data-tw-merge="" for="thumbnail"
                                                        class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                                                        Thumbnail
                                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                                            Required
                                                        </span>
                                                    </label>
                                                    <div class="hero">
                                                        <label for="input-file" id="drop-area">
                                                            <input type="file" accept="image/*" id="input-file" hidden>
                                                            <div id="image-view">
                                                                <img src="{{ asset('assets') }}/508-icon.png">
                                                                <p>Drag here</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <button data-tw-merge type="submit"
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">
                                                    Simpan
                                                </button>
                                                <a href="{{ route('kegiatan.index') }}"
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger mt-5">
                                                    Kembali
                                                </a>
                                            </form>
                                            <!-- END: Validation Form -->
                                        </div>
                                        <div class="source hide relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                            <div class="highlight">
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 py-1 px-2 copy-code"><i
                                                        data-tw-merge="" data-lucide="file"
                                                        class="stroke-[1] copy-code mr-2 h-4 w-4"></i>
                                                    Copy example code</button>
                                            </div>
                                            <div class="highlight">
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 py-1 px-2 copy-code mt-5"><i
                                                        data-tw-merge="" data-lucide="file"
                                                        class="stroke-[1] copy-code mr-2 h-4 w-4"></i>
                                                    Copy example code</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Success Notification Content -->
                        <div id="success-notification-content"
                            class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
                            <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 text-success"></i>
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registration success!</div>
                                <div class="mt-1 text-slate-500">
                                    Please check your e-mail for further info!
                                </div>
                            </div>
                        </div>
                        <!-- END: Success Notification Content -->
                        <!-- BEGIN: Failed Notification Content -->
                        <div id="failed-notification-content"
                            class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
                            <i data-tw-merge="" data-lucide="x-circle" class="stroke-[1] w-5 h-5 text-danger"></i>
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registration failed!</div>
                                <div class="mt-1 text-slate-500">
                                    Please check the fileld form.
                                </div>
                            </div>
                        </div>
                        <!-- END: Failed Notification Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
