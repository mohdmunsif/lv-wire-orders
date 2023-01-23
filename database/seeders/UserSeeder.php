<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\User;
use Laravel\Jetstream\Jetstream;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *    nm
     * @return void
     */
    public function run()
    {
        $users = [
            'Munsif' => 'munsif@gmail.com',
            'Owner' => 'owner@example.com',
            'Manager' => 'manager@example.com',
            'Staff' => 'staff@example.com',
            'Volunteer' => 'volunteer@example.com',
            'User01' => 'User01@example.com',
            'User02' => 'User02@example.com',
            'User03' => 'User03@example.com',
            'User04' => 'User04@example.com',
            'User05' => 'User05@example.com',
            'User06' => 'User06@example.com',
            'User07' => 'User07@example.com',
            'User08' => 'User08@example.com',
            'User09' => 'User09@example.com',
            'User10' => 'User10@example.com',
            'User11' => 'User11@example.com',
            'User12' => 'User12@example.com',
        ];
        foreach ($users as $name => $email) {
            DB::transaction(function () use ($name, $email) {
                return tap(User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make('password'),
                ]) );
            });
        }
 
    }
 
 
}
