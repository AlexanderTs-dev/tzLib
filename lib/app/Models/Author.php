<?php

namespace App\Models;

use App\Models\book_authors as ModelsBook_authors;
use Illuminate\Database\Eloquent\Model\book_authors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable= ['id','init','quantity'];
    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
  
    
}
