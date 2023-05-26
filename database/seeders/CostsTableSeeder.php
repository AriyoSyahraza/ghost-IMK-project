<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cost;

class CostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Cost::create([
                'id_users' => 1,
                'cost_name' => 'Kost A',
                'total_kamar' => 10,
                'cost_type' => 'pria',
                'available_room' => 5,
                'cost_address' => 'Jl. Kost A No. 123',
                'description' => 'Kost A adalah tempat kost eksklusif untuk pria dengan fasilitas lengkap.',
                'contact_person' => '081234567890',
                'night_limit' => '00:00',
                'long_add' => '123.45678',
                'lat_add' => '12.34567',
            ]);
    
            Cost::create([
                'id_users' => 2,
                'cost_name' => 'Kost B',
                'total_kamar' => 8,
                'cost_type' => 'wanita',
                'available_room' => 3,
                'cost_address' => 'Jl. Kost B No. 456',
                'description' => 'Kost B adalah tempat kost nyaman untuk wanita dengan lokasi strategis.',
                'contact_person' => '087654321098',
                'night_limit' => '23:00',
                'long_add' => '98.76543',
                'lat_add' => '76.54321',
            ]);
    
            Cost::create([
                'id_users' => 3,
                'cost_name' => 'Kost C',
                'total_kamar' => 12,
                'cost_type' => 'campuran',
                'available_room' => 6,
                'cost_address' => 'Jl. Kost C No. 789',
                'description' => 'Kost C adalah tempat kost dengan suasana tenang dan fasilitas lengkap.',
                'contact_person' => '082165432109',
                'night_limit' => '22:00',
                'long_add' => '54.32109',
                'lat_add' => '32.10987',
            ]);
        }
}
