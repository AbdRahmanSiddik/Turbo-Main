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
                        <table data-tw-merge="" id="myTable" class="w-full text-left border-b border-slate-200/60">
                            <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Images
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Product Name
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Price
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Link
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Stock
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Status
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSat Sep 2020" src="dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri Sep 2021" src="dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri Sep 2022" src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Ultra HD 4K Smart TV
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Reading, Literature, Knowledge
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $599
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /ultra-hd-4k-smart-tv
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            75
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atTue Jul 2021" src="dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSat Oct 2021" src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Jun 2022" src="dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            8-Cup Coffee Maker
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Decor, Furniture, Outdoor
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $39
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /8-cup-coffee-maker
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            55
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri Nov 2020" src="dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Dec 2021" src="dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Dec 2021" src="dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Smartphone Charging Dock
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Play, Entertainment, Fun
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $19
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /smartphone-charging-dock
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            25
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-danger">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Inactive
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSat Sep 2022" src="dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atThu Mar 2022" src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSat Dec 2022" src="dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Wireless Noise-Cancelling Headphones
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Gadgets, Tech, Electrical
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $149
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /wireless-noise-cancelling-headphones
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            50
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atWed Jan 2022" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Jul 2021" src="dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSat Sep 2021" src="dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Wireless Noise-Cancelling Headphones
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Food, Groceries, Consumables
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $149
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /wireless-noise-cancelling-headphones
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            50
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atThu Aug 2020" src="dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri Aug 2021" src="dist/images/products/product2-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atMon Feb 2022" src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            High-Performance Laptop
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Play, Entertainment, Fun
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $1.099
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /high-performance-laptop
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            30
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atMon Mar 2021" src="dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atWed Dec 2020" src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atWed May 2021" src="dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Wireless Gaming Mouse
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Reading, Literature, Knowledge
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $49
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /wireless-gaming-mouse
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            10
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-danger">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Inactive
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri Jan 2021" src="dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atThu Dec 2021" src="dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atTue Sep 2020" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Bluetooth Speaker with Bass Boost
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Reading, Literature, Knowledge
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $79
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /bluetooth-speaker-with-bass-boost
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            40
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atTue Apr 2020" src="dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atFri May 2020" src="dist/images/products/product2-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atWed Nov 2022" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Smart Home Security Camera
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Decor, Furniture, Outdoor
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $129
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /smart-home-security-camera
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            15
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50">
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Sep 2020" src="dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atMon Mar 2021" src="dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-9 w-9">
                                                <img data-placement="top" title="Uploaded atSun Feb 2021" src="dist/images/products/product3-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            8-Cup Coffee Maker
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Tags: Beauty, Personal Hygiene, Self-care
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            $39
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <a class="flex items-center text-primary" href="#">
                                            <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 w-56 truncate whitespace-nowrap">
                                                /8-cup-coffee-maker
                                            </div>
                                        </a>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap">
                                            55
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="database" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                            <div class="ml-1.5 whitespace-nowrap">
                                                Active
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center">
                                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
                                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Edit</a>
                                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
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
                    <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                        <nav class="mr-auto w-full flex-1 sm:w-auto">
                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-[1] h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-[1] h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-[1] h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-[1] h-4 w-4"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
