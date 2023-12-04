<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class MaterialController extends Controller
{
    //
    public function show($idx, $id){
        $category = Category::find($id);
        // dump($id);
        $materials = $category->materials;
        $material = $materials[$idx];
        if(!$material) abort(404);
        return view('flashcard', compact('material', 'materials', 'idx'));
    }
}
