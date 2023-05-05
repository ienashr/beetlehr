<?php

namespace Database\Seeders;

use App\Models\Fingerprint;
use Illuminate\Database\Seeder;

class FingerprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'Mesin 1',
                'serial_number' => 'SNI-1241231231231',
                'is_active' => true,
            ],
            [
                'name' => 'Mesin 2',
                'serial_number' => 'SNI-541231212',
                'is_active' => false,
            ],
        ];

        foreach ($datas as $key => $value) {
            try {
                Fingerprint::create([
                    'id' => $key += 1,
                    'name' => $value['name'],
                    'serial_number' => $value['serial_number'],
                    'is_active' => $value['is_active'],
                ]);
            } catch (\Exception $exception) {
                // Do something when the exception is thrown
            }
        }
    }
}