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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $kegiatans = Kegiatan::get();
        $today = Carbon::now()->setTimezone('Asia/Jakarta')->format('dmy H:i');

        foreach ($kegiatans as $kegiatan) {
            // Konversi string ke Carbon
            $tanggalMulai = Carbon::parse($kegiatan->tanggal_mulai)->setTimezone('Asia/Jakarta');

            if ($tanggalMulai->format('dmy H:i') === $today) {
                $kegiatan->update(['status' => 'dimulai']);
                $this->info('Kegiatan ' . $kegiatan->nama_kegiatan . ' berstatus dimulai');
            }
        }

        $this->info('Check Kegiatan berhasil dijalankan');
    }
}
