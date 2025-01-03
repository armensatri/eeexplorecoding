<?php

namespace Database\Seeders\Status;

use App\Models\Status\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
  public function run(): void
  {
    $statuses = [
      [
        'ss' => 1,
        'name' => 'draft',
        'slug' => 'draft',
        'bg' => 'slate-200',
        'text' => 'slate-800'
      ],

      [
        'ss' => 2,
        'name' => 'upcoming',
        'slug' => 'upcoming',
        'bg' => 'red-200',
        'text' => 'red-800'
      ],

      [
        'ss' => 3,
        'name' => 'on progress',
        'slug' => 'on-progress',
        'bg' => 'yellow-200',
        'text' => 'yellow-800'
      ],

      [
        'ss' => 4,
        'name' => 'done',
        'slug' => 'done',
        'bg' => 'green-200',
        'text' => 'green-800'
      ],

      [
        'ss' => 5,
        'name' => 'new',
        'slug' => 'new',
        'bg' => 'blue-200',
        'text' => 'blue-800'
      ],
    ];

    foreach ($statuses as $status) {
      Status::create($status);
    }
  }
}
