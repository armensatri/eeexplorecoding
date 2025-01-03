<?php

namespace Database\Seeders\Programming;

use Illuminate\Database\Seeder;
use App\Models\Programming\Roadmap;

class PrgroadmapSeeder extends Seeder
{
  public function run(): void
  {
    $roadmaps = [
      [
        'path_id' => 1,
        'sr' => 1,
        'name' => 'Getstarted Introduction',
        'slug' => 'getstarted-introduction',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
      [
        'path_id' => 2,
        'sr' => 1,
        'name' => 'Algoritma Introduction',
        'slug' => 'algoritma-introduction',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
      [
        'path_id' => 3,
        'sr' => 1,
        'name' => 'Struktur Data Introduction',
        'slug' => 'struktur-data-introduction',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
      [
        'path_id' => 4,
        'sr' => 1,
        'name' => 'Pemograman Introduction',
        'slug' => 'pemograman-introduction',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
      [
        'path_id' => 5,
        'sr' => 1,
        'name' => 'Frontend Introduction',
        'slug' => 'frontend-introduction',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
    ];

    foreach ($roadmaps as $roadmap) {
      Roadmap::create($roadmap);
    }
  }
}
