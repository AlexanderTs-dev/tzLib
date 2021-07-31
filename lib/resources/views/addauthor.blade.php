@extends('welcome')
<form method="post"  action="{{route('author.store')}}">
        <label for="name">Введите Ф.И.О автора</label>
        <input type="init" name="init" value="{{$author->init}}" />
    @csrf
    <input type="submit" value="Save"/>
</form>




   