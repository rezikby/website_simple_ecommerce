<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandmadeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('handmades')->insert([
            [
                'name' => 'Tas Rajut Anyaman',
                'artisan' => 'Rezi Rezi',
                'price' => 150000.00,
                'material' => 'Benang Nylon',
                'image' => 'tas_rajut.jpg',
                'description' => 'Tas rajut buatan tangan dengan desain elegan dan kuat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gelang Manik-Manik',
                'artisan' => 'Ayu Lestari',
                'price' => 50000.00,
                'material' => 'Manik-manik kaca',
                'image' => 'gelang_manik.jpg',
                'description' => 'Gelang warna-warni dengan bahan manik-manik kaca berkualitas tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Patung Kayu Ukir',
                'artisan' => 'Dewa Putra',
                'price' => 300000.00,
                'material' => 'Kayu Jati',
                'image' => 'patung_kayu.jpg',
                'description' => 'Patung ukiran tangan dari kayu jati dengan detail halus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dompet Kulit Handmade',
                'artisan' => 'Budi Hartono',
                'price' => 200000.00,
                'material' => 'Kulit Asli',
                'image' => 'dompet_kulit.jpg',
                'description' => 'Dompet kulit asli handmade dengan jahitan rapi dan elegan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lampu Hias Rotan',
                'artisan' => 'Siti Nuraini',
                'price' => 180000.00,
                'material' => 'Rotan Alam',
                'image' => 'lampu_rotan.jpg',
                'description' => 'Lampu hias berbahan rotan alami dengan pencahayaan lembut dan artistik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
