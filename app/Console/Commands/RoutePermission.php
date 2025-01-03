<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RoutePermission extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'permission:cpr';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create permission routes';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $routes = Route::getRoutes()->getRoutes();

    foreach ($routes as $route) {
      if ($route->getName()) {
        $middleware = $route->middleware();

        if (in_array('web', $middleware)) {
          $permission = Permission::firstOrCreate([
            'name' => $route->getName()
          ]);

          if ($permission->wasRecentlyCreated) {
            $this->info('Permission created: ' . $route->getName());
          }
        }
      }
    }

    $this->info('Create permission route success.');
  }
}
