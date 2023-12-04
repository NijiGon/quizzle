<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class UserAnswerController extends Controller
{
    //
    public function store($id){
        $option = Option::find($id);
        $user_answer = UserAnswer::create([
            'user_id' => auth()->id(),
            'option_id' => $id,
            'question_id' => $option->question->id
        ]);
        $user_answer->save();
        return redirect()->back();
    }
    public function delete($id){
        $user_answer = UserAnswer::where('user_id', auth()->id())->where('question_id', $id)->first();
        $user_answer->delete();
        return redirect()->back();
    }
    public function retake($id){
        $answers = auth()->user()->answers;
        foreach($answers as $answer){
            if($answer->question->category->id == $id){
                $answer->delete();
            }
        }
        return redirect()->back();
    }
}
