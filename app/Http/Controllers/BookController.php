<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $books = Book::all();
      return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Book::create($input);
        return redirect('book')->with('flash_message', 'book Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $books = Book::find($id);
       return view('books.show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Book::find($id);
        return view('books.edit')->with('books', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Book::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('book')->with('flash_message', 'book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);
        return redirect('book')->with('flash_message', 'book_deleted!');
    }
    
}

