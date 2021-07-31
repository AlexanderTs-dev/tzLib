@extends('welcome')
<form method="get">
    <label for="phone">Выберите модель:</label>
    <select id="book" name="phone">
        @foreach ($authors as $author)
        <option value="{{$author->init}}">{{$author->init}}</option>
        @endforeach
    </select>
    <a href="{{route('author.create')}}">jiio</a>
    @csrf
    @foreach ($book as $books)
    <table>
        <tr>
            <td>id</td> <td>init</td> <td>quant</td>
        </tr>
        <tr> 
            <td>{{$author->id}}</td> 
            <td>{{$author->init}}</td> 
            <td>{{$books->name}}</td>
        </tr>
        
    </table>
    @endforeach
</form>