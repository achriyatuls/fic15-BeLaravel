<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //manual
        \App\Models\User::factory()->create([
            'name'=>'Admin User',
            'email'=>'guritalangit@gmail.com',
            'role'=>'admin',
            'password' => Hash::make('12345678'),
            'phone'=>'12345678',
        ]);

        //ProfileClinic
        \App\Models\ProfileClinic::factory()->create([
            'name'=>'Clinic Brawijaya',
            'address'=>'Jalan Brawijaya',
            'phone'=>'0812345678',
            'email'=>'clinic_brawijaya@gmail.com',
            'doctor_name' => 'Dr Budi',
            'phone'=>'118125678912',
            'unique_code'=>'888888888',

        ]);

        //call a doctor
        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class,
    ]);

    }
}
