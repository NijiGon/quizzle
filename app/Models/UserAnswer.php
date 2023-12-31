<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function question(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function option(){
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }
}
