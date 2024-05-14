<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert(
        [
            'nama' => 'M Rafi Faizul Anwar',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Katapang'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'Fadil',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Cibaduyut'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'Azmi',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Cangkuang'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'Ucok',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Rancamanyar'
        ]
    );
    }
}
