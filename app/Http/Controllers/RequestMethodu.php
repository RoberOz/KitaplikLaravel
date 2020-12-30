<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RequestMethodu extends Controller
{
  public function post(){
    //DB::table('users')->insert([
    //  'kullaniciadi'=>"rober",
    //  'sifre'=>123
    //]);
    return "post çalıştı";
  }
}
