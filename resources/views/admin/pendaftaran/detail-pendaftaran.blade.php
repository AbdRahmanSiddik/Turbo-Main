@extends('layout.template')

@section('breadcrumb')
  <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
    <ol class="flex items-center text-theme-1 dark:text-slate-300">
      <li class="">
        <a href="/">Dashboard</a>
      </li>
      <li
        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
        <a href="#">Pendaftaran</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
  <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
    <div>
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium">Nama Kegiatan: {{ $kegiatan->nama_kegiatan }} </div>
      </div>
      <div class="box box--stacked mt-3.5 p-5">
        <table data-tw-merge class="w-full text-left">
          <thead data-tw-merge class="bg-dark text-white dark:bg-black/30">
            <tr data-tw-merge class="">
              <th data-tw-merge
                class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 border-b-0 whitespace-nowrap">
                #
              </th>
              <th data-tw-merge
                class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 border-b-0 whitespace-nowrap">
                Nama Peserta
              </th>
              <th data-tw-merge
                class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 border-b-0 whitespace-nowrap">
                Nama Team
              </th>
              <th data-tw-merge
                class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 border-b-0 whitespace-nowrap">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kegiatan->pendaftaran as $get)
              <tr data-tw-merge class="">
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  {{ $loop->iteration }}
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  {{ $get->peserta->name }}
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  @if ($get->team_id == null)
                    Belum Diatur
                  @else
                    {{ $get->team->nama_team }}
                  @endif
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  <form action="{{ route('update.tim', $get->token_pendaftaran) }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap items-center gap-4 w-full">
                      <!-- Dropdown dengan Label -->
                      <div class="flex flex-col">
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Pilih Tim:</label>
                        <select data-tw-merge aria-label="form-select"
                          class="w-40 text-sm border-slate-200 shadow-sm rounded-md py-1.5 px-3 focus:ring-4 focus:ring-primary dark:bg-darkmode-800 dark:border-transparent"
                          name="tim">
                          @foreach ($tim as $item)
                            <option value="{{ $item->id_team }}">{{ $item->nama_team }}</option>
                          @endforeach
                        </select>
                      </div>
                      <!-- Tombol Simpan -->
                      <button data-tw-merge
                        class="py-2 px-3 rounded-md font-medium bg-primary border-primary text-white w-24">
                        Simpan
                      </button>
                      <!-- Tombol Hapus -->
                      <button data-tw-merge
                        class="py-2 px-3 rounded-md font-medium bg-danger border-danger text-white w-24">
                        Hapus
                      </button>
                    </div>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endsection
