<?php

namespace App\View\Components\Random\Backend\Inputan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectCreate extends Component
{
  public $labelFor;
  public $labelName;
  public $id;
  public $name;
  public $items;
  public $valueOld;
  public $error;
  public $placeholder;

  public function __construct(
    $labelFor,
    $labelName,
    $id,
    $name,
    $items,
    $valueOld,
    $error,
    $placeholder,
  ) {
    $this->labelFor = $labelFor;
    $this->labelName = $labelName;
    $this->id = $id;
    $this->name = $name;
    $this->items = $items;
    $this->valueOld = $valueOld;
    $this->error = $error;
    $this->placeholder = $placeholder;
  }

  public function render(): View|Closure|string
  {
    return view('components.random.backend.inputan.select-create');
  }
}
