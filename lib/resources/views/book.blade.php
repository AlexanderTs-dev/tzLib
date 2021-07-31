@extends('welcome')
<form method="get">
        <label for="book">Выберите автора нужной книги:</label>
        <select id='authors' name=''>
            @foreach ($authors as $author)
            <option value='{{$author->init}}' id="{{$author->init}}"> {{$author->init}}  </option>
            @endforeach
            @csrf
        </select>
        
    <table>
        <tr>
            <td>id</td> <td>Name</td> <td>author</td> <td>datepub</td>
        </tr>
      @foreach ($book as $books)
      @foreach ($author as $authors)
        <tr>       
            <td>{{$books->id}}</td>
             <td>{{$books->name}}</td> 
             <td> {{$author->init}}</td>
             <td>{{$books->datepub}}</td>
        </tr>
        @endforeach
        @endforeach
    </table>
             
     
    @csrf
</form>
@foreach ($book as $books)
@endforeach
    @csrf
    @method('DELETE')

    <button type="submit" >Delete</button>
</form>
<a href="{{route('book.create')}}">Create</a>