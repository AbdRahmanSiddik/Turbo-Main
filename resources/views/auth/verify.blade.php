@extends('layout.template-auth')

@section('content')
    <form method="post" action="{{ route('verification.verifyOtp') }}">
        @csrf
        <div class="mt-10">
            <div class="text-2xl font-medium">Verifikasi Email</div>
            {{-- <div role="alert"
                class="alert relative border rounded-md px-5 py-4 border-primary text-primary dark:border-primary my-7 flex items-center rounded-[0.6rem] border-primary/20 bg-primary/5 px-4 py-3 leading-[1.7]">
                <div class="">
                    <i data-tw-merge="" data-lucide="lightbulb" class="mr-2 h-7 w-7 fill-primary/10 stroke-[0.8]"></i>
                </div>
                <div class="ml-1 mr-8">
                    Selamat datang di  <span class="font-medium">Turbo</span>! Cukup klik
                    <span class="font-medium">Masuk</span> untuk menjelajahi
                    dan mengikuti komunitas kami.
                </div>
                <button data-tw-merge="" data-tw-dismiss="alert" type="button" aria-label="Close"
                    class="py-2 px-3 absolute right-0 my-auto mr-2 btn-close text-primary"><i data-tw-merge=""
                        data-lucide="x" class="stroke-[1] w-5 h-5"></i></button>
            </div> --}}
            <div class="mt-6">
                <label data-tw-merge=""
                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    OTP*
                </label>
                <input data-tw-merge="" type="text" placeholder="******" name="otp" maxlength="6"
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5">
                </div>
                <div class="mt-5 text-center xl:mt-8 xl:text-left">
                    <button type="submit" data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rounded-full w-full bg-gradient-to-r from-theme-1/70 to-theme-2/70 py-3.5 xl:mr-3">Periksa</button>
                    <a href="{{ route('verification.resend') }}" data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 rounded-full mt-3 w-full bg-white/70 py-3.5">Kirim Ulang Kode Verifikasi</a>
                </div>
            </div>
        </div>
    </form>
@endsection
