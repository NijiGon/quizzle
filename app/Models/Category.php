<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quiz(){
        return $this->hasMany(Quiz::class, 'category_id');
    }

    public function material(){
        return $this->hasMany(Material::class, 'category_id');
    }
}
