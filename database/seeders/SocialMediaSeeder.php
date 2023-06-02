<?php

namespace Database\Seeders;

use App\Models\social_media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        social_media::factory()->count(10)->create();
    }
}
