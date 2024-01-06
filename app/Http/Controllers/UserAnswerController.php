<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\UserAnswer;
use App\Models\UserMistake;
use Illuminate\Http\Request;

class UserAnswerController extends Controller
{
    //
    public function store($id){
        $user = auth()->user();
        $option = Option::find($id);
        $user_answer = UserAnswer::create([
            'user_id' => auth()->id(),
            'option_id' => $id,
            'question_id' => $option->question->id
        ]);
        $user_answer->save();
        if($option->is_correct !== 1){
            $user_mistake = $user->mistakes->where('category_id', $option->question->category_id)->first();
            if($user_mistake !== null){
                $user_mistake->mistakes += 1;
                $user_mistake->save();
            }
            else{
                $user_mistake = UserMistake::create([
                    'user_id' => auth()->id(),
                    'category_id' => $option->question->category_id,
                    'mistakes' => 1,
                ]);
            }
            $id = $option->question->id;
            return view('overlays.wrong', compact('id'));
        }
        $id = $option->question->category->id;
        $category = $option->question->category;
        $idx = request('idx');
        $questions = $category->questions;
        if($idx + 1 > $questions->count()) return view('overlays.finish', compact('id'));
        return view('overlays.correct', compact('id', 'idx'));
        // return redirect()->back();
    }
    public function delete($id){
        $user_answer = UserAnswer::where('user_id', auth()->id())->where('question_id', $id)->first();
        $user_answer->delete();
        return redirect()->back();
    }
    public function retake($id){
        $user = auth()->user();
        $answers = $user->answers;
        foreach($answers as $answer){
            if($answer->question->category->id == $id){
                $answer->delete();
            }
        }
        $mistake = $user->mistakes->where('category_id', $id)->first();
        if($mistake !== null) $mistake->delete();
        return redirect()->back();
    }
}
