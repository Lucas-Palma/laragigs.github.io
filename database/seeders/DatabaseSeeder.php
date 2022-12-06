<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
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
        // \App\Models\User::factory(5)->create();
        
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        
        // Listing::create([
        //     'title' => 'Laaaa Laaaa',
        //     'tags' => 'aaaaaaaaaaaaaa',
        //     'company' => 'aaaaaaaaaaaaaa',
        //     'email' => 'aaaaaaaaaaaaaa',
        //     'location' => 'aaaaaaaaaaaaaa',
        //     'website' => 'aaaaaaaaaaaaaa',
        //     'description' => 'aaaaaaaaaaaaaa'
        // ]);

        // Listing::create([
        //     'title' => 'Maaaaaaa Maaaaa',
        //     'tags' => 'aaaaaaaaaaaaaa',
        //     'company' => 'aaaaaaaaaaaaaa',
        //     'email' => 'aaaaaaaaaaaaaa',
        //     'location' => 'aaaaaaaaaaaaaa',
        //     'website' => 'aaaaaaaaaaaaaa',
        //     'description' => 'aaaaaaaaaaaaaa'
        // ]); 


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //    'email' => 'test@example.com',
        // ]);

    }
}
