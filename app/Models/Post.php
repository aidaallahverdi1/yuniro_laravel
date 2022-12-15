<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_id','title', 'tags','author','published','upload','description'];

    // All fields inside $fillable array can be mass-assigned
    public function CategoryPost()
    {
        return $this->hasMany('App\CategoryPost');
    }
}
