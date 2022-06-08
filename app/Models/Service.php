<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;


     // many to many
     public function category()
     {
         return $this->belongsTo(Category::class);
     }

     public function comment()
     {
         return $this->hasMany(Comment::class);
     }
}
