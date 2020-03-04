<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
          'name' => 'Terrence van den Aardweg',
          'email' => 'ter-lou@live.nl',
          'password' => Hash::make('e94245H5'),
          'user_role' => 'Admin'
        ]);
        DB::table("users")->insert([
          'name' => 'Admin',
          'email' => 'admin@befitbyash.com',
          'password' => Hash::make('AdminBfbA'),
          'user_role' => 'Admin'
        ]);
        DB::table("users")->insert([
          'name' => 'Ashley van den Berg',
          'email' => 'befitbyash@outlook.com',
          'password' => Hash::make('Befitbyashley2020'),
          'user_role' => 'Admin'
        ]);
    }
}
