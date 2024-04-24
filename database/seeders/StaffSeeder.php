<?php

namespace Database\Seeders;
use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Staff::create([
        //     "id"=> "1",
        //     'nip' => '231402031',
        //     'email' => 'carlos@gmail.com',
        //     'nama' => 'carlos',
        //     'tanggal_lahir'=> '2005-06-10',
        //     'no_hp'=> '081370426716',
        // ]);
        Staff::factory(8)->create();
    }
}
