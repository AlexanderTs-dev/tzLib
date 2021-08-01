<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $book = Book::get('name');
        $bcount = Book::get('name')->count();
        $authors = Author::all();
        
        return view('author',['book'=>$book,'authors'=>$authors,'bcount'=>$bcount]);
       }
       public function create(Author $author){
           
            return view('addauthor',['author'=>$author]);
       }
       public function store(Request $req){
        $authors = new Author;
    
       $authors->init = $req->init;
        
        $authors->save();
            return redirect('author');
       }
       public function show()
        {
        }
        public function edit(Author $authors)
        {
            return view('',compact('book'));
        }
        public function update($id,Request $request,Author $authors)
        {
            $authors = new Author();
            $authors = Author::find($id);
            $authors ->name  = $request->input('id');
            $authors ->init  = $request->input('init');
            $authors ->quantity  = $request->input('quantity');
            $authors->save();
            return redirect()->route('author.index');
           
        }
       public function delete($id)
        {        Author::find($id)->delete();
    
           return redirect('author');
        }
}
