@extends('layout.template')

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
        <ol class="flex items-center text-theme-1 dark:text-slate-300">
            <li><a href="/">Home</a></li>
            <li
                class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black 
                       before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute 
                       before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                <a href="#">Dashboard</a>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="mt-3.5 flex flex-col gap-8">
        <div class=" flex flex-col">
            <div class="flex flex-col gap-y-2 p-5 xl:flex-row xl:items-center">
                <div class="w-full overflow-hidden rounded-lg shadow-md">
                    <table id="myTable" class="min-w-full bg-white border border-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="px-4 py-2 border">Column 1</th>
                                <th class="px-4 py-2 border">Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Row 1 Data 1</td>
                                <td class="px-4 py-2 border">Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Row 2 Data 1</td>
                                <td class="px-4 py-2 border">Row 2 Data 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthChange": true,
                "pageLength": 5,
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang cocok",
                    "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                    "infoEmpty": "Tidak ada data tersedia",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endsection
