<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AskedQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asked_questions')->insert([
            [
                "question" => "Apakah bisa rental tanpa supir?",
                "answer" => "Tidak bisa dikarenakan paket yang dipilih sudah termasuk supir yang mengendarai mobilnya."
            ],
            [
                "question" => "Jika meminta waktu tambahan dalam waktu sewa?",
                "answer" => "Bisa. nanti dalam proses pengembalian unit akan ditambahkan biaya tambahan dari biaya penyewaan"
            ],
            [
                "question"=>'Perlu apa untuk menyewa unit dan jasa?',
                "answer" => 'Dengan membawa kartu tanda penduduk atau identitas diri untuk jaminan selama sewa jasa dan unit.'
            ]
        ]);
    }
}
