<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
   public function index(){
      $books = Book::all();
      $el= Author::first()->book;
      $authors = Author::all();

   
    
    return view('book', ['books'=>$books,'el'=>$el,'authors'=>$authors]);
   }
   public function create(Book $book,Request $req){
     
    $authors = new Author();
      $authors= Author::all();
        return view('addbook',['book'=>$book,'authors'=>$authors]);
   }
   
   public function store(Request $req){
    $authors= new Author();
       $book = new Book;
       $book->name=$req->name;
       $book->datepub = $req->datepub;
      $authors->init = $req->authorselect;
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