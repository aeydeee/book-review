<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');

        $books = Book::when(
            $title,
            static fn($query, $title) => $query->title($title)
        )
            ->get();

        return view('books.index', [
            'books' => $books
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Book $book)
    {
    }

    public function edit(Book $book)
    {
    }

    public function update(Request $request, Book $book)
    {
    }

    public function destroy(Book $book)
    {
    }
}
