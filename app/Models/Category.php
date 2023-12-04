<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function questions(){
        return $this->hasMany(Question::class, 'category_id');
    }

    public function materials(){
        return $this->hasMany(Material::class, 'category_id');
    }
}
