<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
class futureusers extends Controller
{
    //
public function index(){
$users = DB::select('select * from futureusers');
return view('futureusers',['users'=>$users]);
}
}
