<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {

    }

    public function create(Book $book)
    {
        return view('books.reviews.create', ['book' => $book]);
    }

    public function store(Request $request, Book $book)
    {
        $data = $request->validate([
            'review' => 'required|min:15',
            'rating' => 'required|min:1|max:5|integer'
        ]);

        $book->reviews()->create($data);

        return redirect()->route('books.show', $book)->with('status', 'Review successfully created!'); // PUT A FLASH MESSAGE HERE AS AN EXERCISE
    }

    public function show(Review $review)
    {
    }

    public function edit(Review $review)
    {
    }

    public function update(Request $request, Review $review)
    {
    }

    public function destroy(Review $review)
    {
    }
}
