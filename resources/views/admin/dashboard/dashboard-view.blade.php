@extends('layout.template')

@section('breadcrumb')
  <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
    <ol class="flex items-center text-theme-1 dark:text-slate-300">
      <li class="">
        <a href="/">Home</a>
      </li>
      <li
        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
        <a href="#">Dashboard</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div>
        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
          <div class="text-base font-medium group-[.mode--light]:text-white">
            Dashboard
          </div>
          <ul data-tw-merge="" role="tablist"
            class="p-0.5 border dark:border-darkmode-400 flex box w-auto rounded-[0.6rem] border-slate-200 bg-white group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] md:ml-auto">
            @foreach (auth()->user()->getRoleNames() as $item)
                <li id="example-1-tab{{ $item }}" data-tw-merge="" role="presentation"
                  class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                  <button data-tw-merge="" data-tw-target="#example-1{{ $item }}" role="tab"
                    class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">{{ ucfirst($item) }}</button>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="tab-content ">
          @foreach (auth()->user()->getRoleNames() as $item)
            <div data-transition="" data-selector=".active"
              data-enter="transition-[visibility,opacity] ease-linear duration-150"
              data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
              data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100"
              data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1{{ $item }}" role="tabpanel"
              aria-labelledby="example-1-tab{{ $item }}" class="tab-pane active">
              @include('components.dashboard.'.$item)
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
