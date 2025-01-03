<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Status\StatusSeeder;
use Database\Seeders\Manageuser\UserSeeder;

use Database\Seeders\Programming\{
  PathSeeder,
  PostSeeder,
  RoadmapSeeder,
  PlaylistSeeder
};

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call([
      UserSeeder::class,
      StatusSeeder::class,
      PathSeeder::class,
      RoadmapSeeder::class,
      PlaylistSeeder::class,
      PostSeeder::class,
    ]);
  }
}
