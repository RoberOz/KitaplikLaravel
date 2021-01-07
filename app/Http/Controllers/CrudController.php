<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'index yeri';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|min:3|max:70',
          'author_name' => 'required|max:70',
          'isbn_number' => 'required|numeric',
          'image' => 'image|max:2048',
          'image.*' => 'mimes:jpeg,jpg,png',
          'content' => 'required|min:10',
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->isbn_number = $request->isbn_number;
        $book->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $book->image = 'uploads/'.$imageName;
        }

        $book->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        if (null == $book) {
            return redirect('home');
        } else {
            return view('showcase', compact('book'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        if (null == $book) {
            return redirect('home');
        } else {
            //dd($data);

            return view('edit', compact('book'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required | min:3 | max:70',
        'author_name' => 'required | max:70',
        'isbn_number' => 'required | numeric',
        'image' => 'image|max:2048',
        'image.*' => 'mimes:jpeg,jpg,png',
        'content' => 'required|min:10',
      ]);

        $book = Book::find($id);
        if (null == $book) {
            return redirect('home');
        } else {
            $book->name = $request->name;
            $book->author_name = $request->author_name;
            $book->isbn_number = $request->isbn_number;
            $book->content = $request->content;

            if ($request->hasFile('image')) {
                $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'), $imageName);
                $book->image = 'uploads/'.$imageName;
            }
            $book->save();

            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        Book::where('id', $id)->delete();

        return response()->json([], 204);
    }
}
