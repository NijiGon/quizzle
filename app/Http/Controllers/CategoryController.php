<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function Laravel\Prompts\progress;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('home', compact('categories'));
    }
    public function show($id){
        $category = Category::find($id);
        $materials = $category->materials;
        $progress = 0;
        if(auth()->user() !== null){
            $answers = auth()->user()->answers;
            foreach($answers as $answer){
                // dump($answer->option->category->id);
                if($answer->option->question->category->id === $category->id){
                    $progress++;
                }
            }
        }
        $percentage = ($progress/$category->questions->count())*100;
        return view('category', compact('category', 'materials', 'progress', 'percentage'));
    }
}
