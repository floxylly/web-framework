<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Book::with('genre')->get();
        return view('movies.index', compact('movies'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('books.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|exists:genre,id',
            'year' => 'required|integer|min:0',
            'synopsis' => 'required|string|max:1000',
        ]);
        Movie::create([
            'title' => $validated['title'],
            'genre_id' => $validated['genre'], // Foreign key field
            'year' => $validated['year'],
            'synopsis' => $validated['synopsis'],
        ]);
        return redirect()->route('movies.index')->with('success', 'movie has been successfully created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
