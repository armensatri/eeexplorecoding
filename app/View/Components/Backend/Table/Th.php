<?php

namespace App\View\Components\Backend\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Th extends Component
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.backend.table.th');
  }
}