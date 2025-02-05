<?php

namespace App\Console\Commands;

use App\Models\Kegiatan;
use Illuminate\Console\Command;
use Carbon\Carbon;

class CheckStatusKegiatan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-status-kegiatan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Memeriksa dan memperbarui status kegiatan berdasarkan tanggal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now()->setTimezone('Asia/Jakarta');
        $kegiatans = Kegiatan::all();

        foreach ($kegiatans as $kegiatan) {
            $tanggalMulai = Carbon::parse($kegiatan->tanggal_mulai)->setTimezone('Asia/Jakarta');
            $tanggalAkhir = Carbon::parse($kegiatan->tanggal_akhir)->setTimezone('Asia/Jakarta');

            if ($today->lt($tanggalMulai)) {
                $status = 'akan_datang';
            } elseif ($today->between($tanggalMulai, $tanggalAkhir)) {
                $status = 'dimulai';
            } else {
                $status = 'selesai';
            }

            if ($kegiatan->status !== $status) {
                $kegiatan->update(['status' => $status]);
                $this->info('Kegiatan "' . $kegiatan->nama_kegiatan . '" diperbarui menjadi: ' . strtoupper($status));
            }
        }

        $this->info('Check status kegiatan selesai.');
    }
}
