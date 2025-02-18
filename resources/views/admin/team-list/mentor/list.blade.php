@extends('layout.template')

@section('breadcrumb')
  <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
    <ol class="flex items-center text-theme-1 dark:text-slate-300">
      <li class="">
        <a href="/">Mentoring</a>
      </li>
      <li
        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
        <a href="#">{{ $kegiatan->nama_kegiatan }}</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
  <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
    <div>
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center gap-3">
        <div class="text-base font-medium">Nama Kegiatan: {{ $kegiatan->nama_kegiatan }} </div>
        <div class="text-base font-medium">Jumlah Peserta: {{ $jumlahPeserta }} </div>
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
                Absen
              </th>
              <th data-tw-merge
                class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 border-b-0 whitespace-nowrap">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($peserta as $get)
              <tr data-tw-merge class="">
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  {{ $loop->iteration }}
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  {{ $get->peserta->name }}
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  {{ $get->status }}
                </td>
                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                  <!-- Tombol Hapus -->
                  <div class="flex gap-3">
                      @if ($get->status == 'diterima')
                        <form action="{{ route('status.pendaftaran', $get->token_pendaftaran) }}" method="POST">
                          @csrf
                          <input type="hidden" name="status" value="hadir">
                          <button type="submit" class="py-2 px-3 rounded-md font-medium bg-primary border-primary text-white w-24">
                            Absen
                          </button>
                        </form>
                        <form action="{{ route('status.pendaftaran', $get->token_pendaftaran) }}" method="POST">
                          @csrf
                          <input type="hidden" name="status" value="alpa">
                          <button type="submit" class="py-2 px-3 rounded-md font-medium bg-danger border-danger text-white w-24">
                            Alpa
                          </button>
                        </form>
                      @elseif($get->status == 'pending')
                        <form action="{{ route('status.pendaftaran', $get->token_pendaftaran) }}" method="POST">
                          @csrf
                          <input type="hidden" name="status" value="diterima">
                          <button type="submit" class="py-2 px-3 rounded-md font-medium bg-warning border-warning text-white w-24">
                            Terima
                          </button>
                        </form>
                      @endif
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endsection
