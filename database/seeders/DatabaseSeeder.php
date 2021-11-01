<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Registration::create([
            'name' => 'Juan Dela Cruz',
            'gender' => 'Male',
            'dob' => '2000-01-01',
            'email' => 'juan@juan.com',
            'mobile_number' => '09186286277',
            'nationality' => 'Filipino'
        ]);
    }
}
