<?php

namespace Database\Seeders\Programming;

use Illuminate\Database\Seeder;
use App\Models\Programming\Playlist;

class PrgplaylistSeeder extends Seeder
{
  public function run(): void
  {
    $playlists = [
      [
        'roadmap_id' => 1,
        'spl' => 1,
        'name' => 'Intro Getstarted',
        'slug' => 'intro-getstarted',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'roadmap_id' => 2,
        'spl' => 1,
        'name' => 'Intro Algoritma',
        'slug' => 'intro-algoritma',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'roadmap_id' => 3,
        'spl' => 1,
        'name' => 'Intro Struktur Data',
        'slug' => 'intro-struktur-data',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'roadmap_id' => 4,
        'spl' => 1,
        'name' => 'Intro Pemograman',
        'slug' => 'intro-pemograman',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],

      [
        'roadmap_id' => 5,
        'spl' => 1,
        'name' => 'Intro Frontend',
        'slug' => 'intro-frontend',
        'status_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet.'
      ],
    ];

    foreach ($playlists as $playlist) {
      Playlist::create($playlist);
    }
  }
}
