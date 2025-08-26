<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerController extends Controller
{
  public function index()
  {
    return view('backend.dashboard.owner', [
      'title' => 'Dashboard | Owner'
    ]);
  }
}
