<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Charlie10',
            'email' => 'charleschabvonga@gmail.com',
            'password' => Hash::make('password'),
            'mobile' => '0634898514',
            'name' => 'Charles',
            'surname' => 'Chabvonga',
            'job_title' => 'Full Stack Software Engineer',
            'bio' => 'Hello! I am Charles, a dynamic, hands-on, performance-driven, and self-motivated Full Stack
             Software Engineer at Neslo Tech. I have an innate love for the process of creating clean, secure, 
             test-driven, maintainable, and modular code.'
        ]);

        User::factory(4)->create();
    }
}
