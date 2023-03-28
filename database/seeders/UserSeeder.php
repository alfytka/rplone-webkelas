<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Andre Daniswara Putra',
                'profile_pic' => 'andre.jpg',
                'nis' => '10.2020.10',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Alfitka Haerul Kurniawan',
                'profile_pic' => 'alfitka.jpg',
                'nis' => '10.2020.11',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Atyla Azfa Al Harits',
                'profile_pic' => 'atyla.jpg',
                'nis' => '10.2020.13',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Dimas Adirawijaya',
                'profile_pic' => 'dimas.jpg',
                'nis' => '10.2020.14',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Elfan Hari Saputra',
                'profile_pic' => 'elfan.jpg',
                'nis' => '10.2020.15',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Irvan Hakim',
                'profile_pic' => 'irvan.jpg',
                'nis' => '10.2020.16',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Khikmal Kurniawan',
                'profile_pic' => 'khikmal.jpg',
                'nis' => '10.2020.17',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Rafli Al-Musyafa',
                'profile_pic' => 'rafli.jpg',
                'nis' => '10.2020.18',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Renal Ajrun',
                'profile_pic' => 'renal.jpg',
                'nis' => '10.2020.19',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Teguh Afriansyah',
                'profile_pic' => 'teguh.jpg',
                'nis' => '10.2020.20',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ],
            [
                'name' => 'Trio Adi Permana',
                'profile_pic' => 'trio.jpg',
                'nis' => '10.2020.21',
                'jenis_kelamin' => 'Laki-laki',
                'hoby' => 'Membaca',
                'quotes' => 'well'
            ]
        ])->each(function($users) {
            User::create($users);
        });
    }
}
