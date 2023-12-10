<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Question;
use App\Models\UserAnswer;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnswerCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('id');
        $idx = $request->route('idx') - 1;
        $category = Category::find($id);
        $questions = $category->questions;
        $userId = auth()->id();


        // Uncomment the following line to check the value of $userAnswer
        // dd($userAnswer);
        if($idx < 0) return abort(404);

        if ($idx >= 1) {
            $userAnswer = UserAnswer::where('user_id', $userId)
                    ->where('question_id', $questions[$idx - 1]->id)
                    ->first();
            if($userAnswer === null || $userAnswer->option->is_correct !== 1){
                $i = $idx - 1;
                while ($i >= 0) {
                    $userAnswer = UserAnswer::where('user_id', $userId)
                        ->where('question_id', $questions[$i]->id)
                        ->first();

                    if ($userAnswer !== null) {
                        if($userAnswer->option->is_correct === 1)
                            return redirect()->route('question.details', ['id' => $id, 'idx' => $i + 2]);
                        else
                            return redirect()->route('question.details', ['id' => $id, 'idx' => $i + 1]);
                    }

                    $i--;
                }
                return redirect()->route('question.details', ['id' => $id, 'idx' =>  1]);
            }


        }

        return $next($request);

    }



}
