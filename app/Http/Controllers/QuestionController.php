<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function show($idx, $id){
        $category = Category::find($id);
        // dump($id);
        $questions = $category->questions;
        $question = $questions[$idx - 1];
        $options = $question->options->shuffle();
        // $user_answer = null;
        // if(!$questions) abort(404);
        $user_answer = UserAnswer::where('user_id', auth()->id())->where('question_id', $question->id)->first();
        return view('quiz', compact('question', 'questions', 'idx', 'user_answer', 'options'));
    }

    public function finish($id){
        $category = Category::find($id);
        return view('congratulations', compact('category'));
    }
}
