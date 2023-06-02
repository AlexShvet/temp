<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\Avatar;
use App\Models\Email;
use App\Models\User;
use App\Models\social_media;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Phone::factory(99)->create();
        Avatar::factory(99)->create();
        Email::factory(99)->create();
        User::factory(99)->create();
        social_media::factory(99)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
