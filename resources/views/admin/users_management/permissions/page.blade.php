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
    <div class="mt-5">
        <h2 class="text-lg font-medium">Permissions</h2>
        <ul>
            @foreach ($permissions as $permission)
                <li>{{ $permission->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
