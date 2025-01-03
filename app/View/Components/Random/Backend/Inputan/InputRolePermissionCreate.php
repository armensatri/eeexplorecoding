<?php

namespace App\View\Components\Random\Backend\Inputan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputRolePermissionCreate extends Component
{
  public $groupper;

  public function __construct($groupper)
  {
    $this->groupper = $groupper;
  }

  public function render(): View|Closure|string
  {
    return view('components.random.backend.inputan.input-role-permission-create');
  }
}
