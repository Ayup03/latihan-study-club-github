<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class projeklaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_mahasiswa')->insert([
            'id' => "01",
            'nim' => "F1E122058",
            'nama' => "AYU FRISKA PURBA",
            'kelas' => "R002",
            'deskripsi' => "Mahasiswa sistem informasi"
          ]);
    
          DB::table('table_mahasiswa')->insert([
            'id' => "02",
            'nim' => "F1E121152",
            'nama' => "PUTRI",
            'kelas' => "R007",
            'deskripsi' => "Mahasiswa sistem informasi"
          ]);

          DB::table('table_mahasiswa')->insert([
            'id' => "03",
            'nim' => "F1E122086",
            'nama' => "AURELIA",
            'kelas' => "R005",
            'deskripsi' => "Mahasiswa sistem informasi"
          ]);

          DB::table('table_mahasiswa')->insert([
            'id' => "04",
            'nim' => "F1E122145",
            'nama' => "VITA",
            'kelas' => "R005",
            'deskripsi' => "Mahasiswa sistem informasi"
          ]);
    }
}
