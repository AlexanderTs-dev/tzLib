<?php

namespace App\Models;
use Database\Factories\author_bookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable= ['id','init'];
    public function book()
    {
        return $this->belongsToMany(Book::class,'author_book');
    }
  
    
}
