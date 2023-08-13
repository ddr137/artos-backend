<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Bank Artos',
                'code' => 'bwa',
                'status' => 'active',
                'thumbnail' => 'https://hiperkreatif.com/wp-content/uploads/2023/03/logo-color-1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BNI',
                'code' => 'bni_va',
                'status' => 'active',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BCA',
                'code' => 'bca_va',
                'status' => 'active',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BRI',
                'code' => 'bri_va',
                'status' => 'active',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/1200px-BRI_2020.svg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
