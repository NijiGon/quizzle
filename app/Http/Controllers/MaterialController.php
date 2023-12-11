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
        $materials = $category->materials;
        if($idx > $materials->count() - 1) abort(404);
        $material = $materials[$idx];
        return view('flashcard', compact('material', 'materials', 'idx'));
    }
}
