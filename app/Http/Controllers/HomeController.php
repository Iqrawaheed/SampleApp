<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Index()
    {
        return view('home.index');

    }
    public function showdata(Request $req)
    {
       
        // print_r($req->all());
    // return"hello world";
    $data['formdata']=$req->all();
    return view('home.show',$data);

    }
    public function sample()
    {
        return view ('home.sample');

    }
}
