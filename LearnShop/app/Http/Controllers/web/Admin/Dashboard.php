<?php

namespace App\Http\Controllers\web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function show()
    {
        return view('admin.panel');
    }

}
