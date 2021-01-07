<?php

namespace App\Http\Controllers;

use App\Book;

class GuestController extends Controller
{
  public function index()
  {
      $books = Book::all();
      //echo $books;

      return view('guest')->with(compact('books'));
  }
}
