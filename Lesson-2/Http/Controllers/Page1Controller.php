<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index()
    {
        echo "Emre Index method";
    }
    public function show()
    {
        echo  "çalıştı";
    }
}
