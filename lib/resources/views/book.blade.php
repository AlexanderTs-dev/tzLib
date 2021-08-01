@extends('welcome')
<form method="get">
        <label for="book">Выберите автора нужной книги:</label>
        <select id='authors' name=''>
            @foreach ($authors as $author)
            <option value='{{$author->name}}' id="{{$author->name}}"> {{$author->name}}  </option>
            @endforeach
            @csrf
        </select>
        @foreach ($el as $els)
    <table>
        <tr>
            <td>id</td> <td>Name</td> <td>author</td> <td>datepub</td>
        </tr>
        <tr>       
            <td>{{$els->id}}</td>
             <td>{{$els->name}}</td> 
            <td> {{$els->book}}</td>
             <td>{{$els->datepub}}</td>
             
         </table>
        </tr>
    </table>
    @endforeach
</form>
    @csrf
    @method('DELETE')

    <button type="submit" >Delete</button>
</form>
<a href="{{route('book.create')}}">Create</a>