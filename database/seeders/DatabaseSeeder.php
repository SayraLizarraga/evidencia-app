<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model clients
use App\Models\clients;

//model staff
use App\Models\staff;

//model products
use App\Models\products;

//model orders
use App\Models\orders;

//model orders details
use App\Models\ordersdetails;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class
        ]);

        //clients::factory(20)->create(); 
        $this->call([
            ClientsSeeder::class
        ]);

        //staff::factory(10)->create();
        $this->call([
            StaffSeeder::class
        ]);

        products::factory(200)->create();
        orders::factory(12)->create();
        ordersdetails::factory(12)->create();
    }
}
