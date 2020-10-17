<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(PhoneTypeSeeder ::class);
        $this->call(TelephoneSeeder ::class);
    }
}
