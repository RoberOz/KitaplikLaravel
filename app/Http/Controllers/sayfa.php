<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class sayfa extends Controller
{
  public function post(){
    //DB::table('users')->insert([
    //  'kullaniciadi'=>"rober",
    //  'sifre'=>123
    //]);

    $books=Book::all();
    echo $books;

    //$user = new User;
    //$user->username="rober";
    //$user->password=1234;
    //$user->save();

    //return "post çalıştı";
  }
}
