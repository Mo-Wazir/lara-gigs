<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Habiba Ayoni',
            'email' => 'fauzia@gmail.com'
        ]);

        Listing::factory(5)->create([
           'user_id'  = $user->id 
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Osun, Nigeria',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolro sir sit amet, expediata'
        // ]);

        //  Listing::create([
        //     'title' => 'Fullstack PHP Developer',
        //     'tags' => 'laravel, php',
        //     'company' => 'Niptet Org',
        //     'location' => 'Kano, Nigeria',
        //     'email' => 'gmail@email.com',
        //     'website' => 'https://www.newniptet.com',
        //     'description' => 'Lorem ipsum dolro sir sit amet, expediata'
        // ]);

    }
}
