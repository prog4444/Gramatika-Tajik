<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        $results = Posts::where('title', 'LIKE', '%' . $query . '%')->paginate(3);

        return redirect()->route('search.results')->with('results', $results);
    }

    public function showResults()
    {
        $results = session('results');

        return view('results', compact('results'));
    }
}
