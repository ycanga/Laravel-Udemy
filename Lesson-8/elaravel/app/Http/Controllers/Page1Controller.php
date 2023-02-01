<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index()
    {
        $data=[
          "php"=>
          [
              'title'=>'php',
              'egitmen'=>"emrah  yüksel",
              "sure"=> "45 saat"
          ],
            "bootstrap"=>
            [
                'title'=>'Bootstrap',
                'egitmen'=>'emrah Yüksel',
                'sure'=>'15 saat'
            ]
        ];
        return view('backend.index',$data);
    }
    public function show()
    {
        echo  "çalıştı";
    }
}
