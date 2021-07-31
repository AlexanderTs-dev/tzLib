<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
   public function index(Request $request,Author $authors){
    $book = Book::all();
    $authors->update();
      $authors = Author::all();
      $authors->authorselect = $request->authorselect ;
    return view('book', ['book'=>$book,'authors'=>$authors]);
   }
   public function create(Book $book,Request $req){
    $authors = new Author();
      $authors= Author::all();
      $authors->authorselect = $req->authorselect;
    
      $authors->id = $req->id;
        return view('addbook',['book'=>$book,'authors'=>$authors]);
   }
   
   public function store(Request $req){
    $authors= Author::all();
       $book = new Book;
       $book->name=$req->name;
       $book->datepub = $req->datepub;
      $authors->authorselect = $req->authorselect;
        $authors->save();
       $book->save();
       
        return redirect('book');
   }
   public function show()
    {
    }
    public function edit(Book $book)
    {
        return view('editbook',compact('book'));
    }
    public function update($id,Request $request,Book $book)
    {
        $book = new Book;
        $book = Book::find($id);
        $book ->name  = $request->input('name');
        $book ->authors  = $request->input('authors');
        $book ->datepub  = $request->input('datepub');
        $book->save();
        return redirect()->route('book.index');
       
    }
   public function delete($id)
    {        Book::find($id)->delete();

       return redirect('book');
    }

   
}