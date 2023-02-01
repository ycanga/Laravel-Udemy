<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke()
    {
        echo "<a href='".route('frontend.page3')."'>Page 3</a>";
    }
}
