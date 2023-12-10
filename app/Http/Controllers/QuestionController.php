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
        $questions = $category->questions;
        $question = $questions[$idx - 1];
        $options = $question->options->shuffle();
        $user_answer = UserAnswer::where('user_id', auth()->id())->where('question_id', $question->id)->first();
        return view('quiz', compact('id', 'question', 'questions', 'idx', 'user_answer', 'options'));
    }

    public function finish($id){
        $user = auth()->user();
        $category = Category::find($id);
        $mistake = $user->mistakes->where('category_id', $id)->first();
        $mistake_count = $mistake !== null ? $mistake->mistakes : 0;
        $star_count = 0;
        if($mistake_count === 0) $star_count = 5;
        else if($mistake_count >= 1 && $mistake_count <= 3) $star_count = 4;
        else if($mistake_count >= 4 && $mistake_count <= 6) $star_count = 3;
        else if($mistake_count >= 7 && $mistake_count <= 10) $star_count = 2;
        else if($mistake_count > 10) $star_count = 1;
        return view('congratulations', compact('category', 'star_count', 'mistake_count'));
    }
}
