<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\outlets;

class OutletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        outlets::create([
            'code' => Str::random(5),
            'name' => 'alfath laundry',
            'status' => 'buka',
            'address' => 'pakansari',
            'phone' => '089662719963',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'jomok laundry',
            'status' => 'tutup',
            'address' => 'ngawi blok M',
            'phone' => '089999999999',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'koko laundry',
            'status' => 'buka',
            'address' => 'shang hai',
            'phone' => '089637462434',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'adudu laundry',
            'status' => 'buka',
            'address' => 'cibodas',
            'phone' => '08987654321',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'love laundry',
            'status' => 'buka',
             'address' => 'cisalak',
            'phone' => '097643432344',
        ]);
    }
}