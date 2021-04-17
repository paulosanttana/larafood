<?php

namespace App\Http\Controllers\Admin2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Plan2Controller extends Controller
{
    public function index()
    {
        return view('admin.pages.plans.index');
    }
}
