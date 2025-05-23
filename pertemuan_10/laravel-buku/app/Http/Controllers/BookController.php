<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
            'description' => 'nullable',
        ]));

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

   
}


?>