<?php

namespace Database\Seeders\Programming;

use Illuminate\Database\Seeder;
use App\Models\Programming\Path;

class PrgpathSeeder extends Seeder
{
  public function run(): void
  {
    $paths = [
      [
        'sp' => 1,
        'name' => 'Getstarted',
        'slug' => 'getstarted',
        'status_id' => 2,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'sp' => 2,
        'name' => 'Algoritma',
        'slug' => 'algoritma',
        'status_id' => 2,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'sp' => 3,
        'name' => 'Struktur Data',
        'slug' => 'Struktur-data',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'sp' => 4,
        'name' => 'Pemograman',
        'slug' => 'pemograman',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'sp' => 5,
        'name' => 'Frontend',
        'slug' => 'frontend',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
    ];

    foreach ($paths as $path) {
      Path::create($path);
    }
  }
}
