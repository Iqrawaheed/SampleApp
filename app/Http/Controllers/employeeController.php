<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    //
    public function getdata()
    // {
    //     $data=DB::select('select * from employee');
    //     echo'<pre>';
    //     print_r($data);
    // }
    // $data = DB::employee('data')
    // // {
    //     ->select('name', 'email as employee_email')
    //     ->get();

    // // } 
    $users =DB::table('users');
{
->whereMonth('created_at', '12')
->get();
}
}

