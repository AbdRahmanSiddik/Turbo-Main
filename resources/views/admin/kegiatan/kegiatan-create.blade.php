@extends('layout.template')

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
        <ol class="flex items-center text-theme-1 dark:text-slate-300">
            <li class="">
                <a href="/">Dashboard</a>
            </li>
            <li
                class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                <a href="#">Kegiatan</a>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Data Kegiatan
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <button data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
                        <i data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                        Add New Kegiatan
                    </button>
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
                                        Thumbnail
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Judul Kegiatan
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Tanggal Mulai
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Tanggal Selesai
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Status
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="[&_td]:last:border-b-0">
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        1
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg"
                                                    alt="Product Image"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">8-Cup Coffee Maker</a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            /8-cup-coffee-maker
                                        </div>
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">$39</div>
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">55</div>
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">Active</div>
                                        </div>
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown relative h-5">
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
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="check-square"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                                data-tw-merge="" data-lucide="trash2"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
