<?php

namespace Database\Seeders\Manageuser;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $user1 = User::create([
      'name' => 'Armen Satri',
      'username' => 'armensatri',
      'email' => 'armensatri@gmail.com',
      'password' => bcrypt('123qwe')
    ]);

    $user2 = User::create([
      'name' => 'Super Admin',
      'username' => 'superadmin',
      'email' => 'superadmin@gmail.com',
      'password' => bcrypt('123qwe')
    ]);

    $user3 = User::create([
      'name' => 'writing',
      'username' => 'writing',
      'email' => 'writing@gmail.com',
      'password' => bcrypt('123qwe')
    ]);

    $user4 = User::create([
      'name' => 'Member',
      'username' => 'member',
      'email' => 'member@gmail.com',
      'password' => bcrypt('123qwe')
    ]);

    $owner = Role::create([
      's_role' => 1,
      'name' => 'Owner',
      'slug' => 'owner',
      'bg' => 'red-200',
      'text' => 'red-800',
    ]);

    $superadmin = Role::create([
      's_role' => 2,
      'name' => 'Super Admin',
      'slug' => 'superadmin',
      'bg' => 'yellow-200',
      'text' => 'yellow-800',
    ]);

    $writing = Role::create([
      's_role' => 3,
      'name' => 'Writing',
      'slug' => 'writing',
      'bg' => 'green-200',
      'text' => 'green-800',
    ]);

    $member = Role::create([
      's_role' => 4,
      'name' => 'Member',
      'slug' => 'member',
      'bg' => 'slate-200',
      'text' => 'slate-800',
    ]);

    $user1->assignRole($owner->id);
    $user2->assignRole($superadmin->id);
    $user3->assignRole($writing->id);
    $user4->assignRole($member->id);
  }
}
