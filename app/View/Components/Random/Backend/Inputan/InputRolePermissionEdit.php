<?php

namespace App\View\Components\Random\Backend\Inputan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputRolePermissionEdit extends Component
{
  public $groupper;
  public $valueDefault;

  public function __construct($groupper, $valueDefault)
  {
    $this->groupper = $groupper;
    $this->valueDefault = $valueDefault;
  }

  public function render(): View|Closure|string
  {
    return view('components.random.backend.inputan.input-role-permission-edit');
  }
}
