@extends('welcome')
<form method="get">
        @foreach ($authors as $author)
        @endforeach
    <a href="{{route('author.create')}}">Создать автора</a>
    <a href="{{route('author.create')}}">Удалить автора</a>
    @csrf
    @foreach ($book as $books)
    <table>
        <tr>
            <td>id</td> <td>init</td> <td>quant</td>
        </tr>
        <tr> 
            <td>{{$author->id}}</td> 
            <td>{{$author->init}}</td> 
            <td>{{$bcount}}</td>
        </tr>
        
    </table>
    @endforeach
</form>