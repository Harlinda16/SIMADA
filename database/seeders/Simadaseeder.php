<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Simadaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('pengguna')->insert([
            [
            'nama' => 'Admin',
            'email' => 'admin@simada.com',
            'password' => Hash::make('admin123'),
            'peran' => 'admin',
        ],

            [
            'nama' => 'ibu lina',
            'email' => 'lina@simada.com',
            'password' => Hash::make('guru123'),
            'peran' => 'guru',
            ],

            [
            'nama' => 'dina',
            'email' => 'dina@simada.com',
            'password' => Hash::make('siswa123'),
            'peran' => 'siswa',
            ]
            ]);

        DB::table('guru')->insert([

            'pengguna_id' => 2,
            'nip' => '19880914001',
            'nama' => 'ibu lina',
            'mapel_utama' => 'bahasa indonesia',
        ]);

        DB::table('siswa')->insert([
            'pengguna_id' => 3,
            'nis' => '2025010001',
            'nama' => 'dina',
            'kelas' => '10 ipa 1',
            'tanggal_lahir' => '2009-01-25',
            'alamat' => 'Jl. Pendidikan No.12',
        ]);

        DB::table('mata_pelajaran')->insert([
            ['nama_mapel' => 'bahasa indoesia',
            'kode_mapel' => 'BIN01',
            'guru_id' => '1',],

            ['nama_mapel' => 'matematika',
            'kode_mapel' => 'MAT01',
            'guru_id' => '1',],

            ['nama_mapel' => 'bahasa inggris',
            'kode_mapel' => 'BIG01',
            'guru_id' => '1',
            ]

        ]);

        DB::table('pendaftaran_mapel')->insert([

            ['siswa_id' => 1,
            'mata_pelajaran_id' => 1,],

            ['siswa_id' => 1,
            'mata_pelajaran_id' => 2,],

            ['siswa_id' => 1,
            'mata_pelajaran_id' => 3,]

        ]);

    }
}
