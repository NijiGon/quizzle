<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function  search(Request $request){
        $query = $request->input('query');
        if($query === null) return null;
        $results = Category::where('name', 'like', $query . '%')->get();
        return view('search', compact('results'));
    }
}
