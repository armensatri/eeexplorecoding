<?php

namespace App\Http\Controllers\Backend\Status;

use Illuminate\Http\Request;
use App\Models\Status\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\Status\StatusSr;
use App\Http\Requests\Status\StatusUr;

class StatusesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StatusSr $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Status $status)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Status $status)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StatusUr $request, Status $status)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Status $status)
  {
    //
  }
}