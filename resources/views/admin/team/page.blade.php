@extends('layout.template')

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
        <ol class="flex items-center text-theme-1 dark:text-slate-300">
            <li class="">
                <a href="/">Dashboard</a>
            </li>
            <li
                class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                <a href="#">Team</a>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Data Team
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <a data-tw-merge data-tw-toggle="modal" data-tw-target="#store" href="#"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">
                        <i data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                        Tambah Team Baru
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
                                        Team Name
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                        Mentor
                                    </td>
                                    <td
                                        class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                        Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teams as $team)
                                    <tr class="[&_td]:last:border-b-0">
                                        <td
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex">
                                                <div class="image-fit zoom-in h-9 w-9">
                                                    <img src="{{ asset('img') }}/team/{{ $team->avatar }}"
                                                        alt="Product Image"
                                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">{{ $team->nama_team }}</div>
                                        </td>
                                        <td
                                            class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">{{ $team->mentor->name ?? '' }}</div>
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
                                                            <a data-tw-merge data-tw-toggle="modal" data-tw-target="#update"
                                                                href="#" data-avatar="{{ $team->avatar }}"
                                                                data-name="{{ $team->nama_team }}"
                                                                data-token="{{ $team->token_team }}"
                                                                data-mentor="{{ $team->mentor->name ?? '' }}"
                                                                data-deskripsi="{{ $team->deskripsi }}"
                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                    data-tw-merge="" data-lucide="check-square"
                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                Edit</a>
                                                            <a data-tw-merge data-tw-toggle="modal" data-tw-target="#delete"
                                                                href="#" data-token="{{ $team->token_team }}"
                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                                    data-tw-merge="" data-lucide="trash2"
                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-5 py-4 text-center text-slate-500 dark:text-slate-400">
                                            Tidak ada data yang tersedia
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- store modal --}}
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="store"
        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] ">
            <a class="absolute right-0 top-0 mr-3 mt-3" data-tw-dismiss="modal" href="#">
                <i data-tw-merge data-lucide="x"
                    class="stroke-[1] w-5 h-5 h-8 w-8 text-slate-400 h-8 w-8 text-slate-400"></i>
            </a>
            <form action="/team/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    <div class="text-[0.94rem] font-medium pb-5">
                        Tambah Team Baru
                    </div>
                    <div>
                        <label data-tw-merge for="team-name"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Team Name
                        </label>
                        <input data-tw-merge id="team-name" name="nama_team" type="text" placeholder="Razor"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                            required>
                    </div>
                    <div class="mt-3">
                        <label class="inline-block mb-2">
                            Avatar
                        </label>
                        <label class="area-drop inline-block h-64 w-full cursor-pointer">
                            <input type="file" accept="image/*" class="input-gambar hidden" name="avatar">
                            <div
                                class="tampilan-gambar w-full h-full rounded-2xl border-2 border-dashed flex items-center justify-center overflow-hidden p-2">
                                <img class="pratinjau-gambar h-60 object-cover rounded-xl hidden" src=""
                                    alt="Pratinjau">
                                <p class="teks-drag text-gray-500">Seret ke sini atau klik untuk mengunggah</p>
                            </div>
                        </label>
                    </div>


                    <div class="mt-3">
                        <label data-tw-merge for="mentor"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Mentor
                        </label>
                        <select id="mentor" data-tw-merge aria-label="Default select example" name="mentor_id"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md pb-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                            @foreach ($mentors as $mentor)
                                <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                            <label data-tw-merge for="deskripsi"
                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                Deskripsi
                            </label>
                            <textarea data-tw-merge id="deskripsi" name="deskripsi" placeholder="Razor adalah" minlength="10"
                                required="required"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control form-control"></textarea>
                        </div>
                    </div>

                    <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5 mt-5">Simpan</button>

                </div>
            </form>
        </div>
    </div>
    {{-- end store modal --}}

    {{-- update modal --}}
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="update"
        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] ">
            <a class="absolute right-0 top-0 mr-3 mt-3" data-tw-dismiss="modal" href="#">
                <i data-tw-merge data-lucide="x"
                    class="stroke-[1] w-5 h-5 h-8 w-8 text-slate-400 h-8 w-8 text-slate-400"></i>
            </a>
            <form action="" id="form-update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    <div class="text-[0.94rem] font-medium pb-5">
                        Edit Team
                    </div>
                    <div>
                        <label data-tw-merge for="update-name"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Team Name
                        </label>
                        <input data-tw-merge id="update-name" type="text" placeholder="Razor" value=""
                            name="nama_team"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                    </div>
                    <div class="mt-3">
                        <label data-tw-merge for="avatar"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Avatar
                        </label>
                        <label for="update-image" class="area-drop inline-block h-64 w-full cursor-pointer">
                            <input type="file" accept="image/*" id="update-image" value=""
                                class="input-gambar hidden" name="avatar">
                            <div
                                class="tampilan-gambar w-full h-full rounded-2xl border-2 border-dashed flex items-center justify-center overflow-hidden p-2">
                                <img id="preview-image-update" src="" alt="Preview"
                                    class="pratinjau-gambar h-60 object-cover rounded-xl">
                                <p class="teks-drag text-gray-500 hidden"></p>
                            </div>
                        </label>
                    </div>


                    <div class="mt-3">
                        <label data-tw-merge for="mentor-edit"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Mentor
                        </label>
                        <select id="mentor-update" data-tw-merge aria-label="Default select example" name="mentor_id"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md pb-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                            @foreach ($mentors as $mentor)
                                <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <div class="input-form mt-3 [&.has-error_.form-control]:border-danger">
                            <label data-tw-merge for="update-deskripsi"
                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                Deskripsi
                            </label>
                            <textarea data-tw-merge id="update-deskripsi" name="deskripsi" placeholder="Razor adalah" minlength="10"
                                required="required"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control form-control">
                        </textarea>
                        </div>
                    </div>

                    <button data-tw-merge
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5 mt-5">Update</button>

                </div>
            </form>
        </div>
    </div>
    {{-- end update modal --}}

    {{-- delete modal --}}
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete"
        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
            <form id="form-delete" action="" method="post">
                @csrf
                <div class="p-5 text-center">
                    <i data-tw-merge data-lucide="x-circle"
                        class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-danger mx-auto mt-3 h-16 w-16 text-danger"></i>
                    <div class="mt-5 text-3xl">Apakah kamu yakin ?</div>
                    <div class="mt-2 text-slate-500">
                        ingin menghapus data ini?
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24 mr-1 w-24">Batal</button>
                    <button data-tw-merge type="Submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24 w-24">Hapus</button>
                </div>
            </form>
        </div>
    </div>
    {{-- end delete modal --}}
@endsection
