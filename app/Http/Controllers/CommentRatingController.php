<?php
namespace App\Http\Controllers;

use App\Models\CommentRating;
use Illuminate\Http\Request;

class CommentRatingController extends Controller
{
    public function index()
    {
        $commentsRatings = CommentRating::all();
        return view('commentsRatings.index', compact('commentsRatings'));
    }

    public function create()
    {
        return view('commentsRatings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string',
            'date' => 'required|date',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        CommentRating::create($validated);

        return redirect()->route('commentsRatings.index')->with('success', 'Comentario y valoración creado con éxito');
    }

    public function show(CommentRating $commentRating)
    {
        return view('commentsRatings.show', compact('commentRating'));
    }

    public function edit(CommentRating $commentRating)
    {
        return view('commentsRatings.edit', compact('commentRating'));
    }

    public function update(Request $request, CommentRating $commentRating)
    {
        $validated = $request->validate([
            'comment' => 'required|string',
            'date' => 'required|date',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $commentRating->update($validated);

        return redirect()->route('commentsRatings.index')->with('success', 'Comentario y valoración actualizado con éxito');
    }

    public function destroy(CommentRating $commentRating)
    {
        $commentRating->delete();

        return redirect()->route('commentsRatings.index')->with('success', 'Comentario y valoración eliminado con éxito');
    }
}
