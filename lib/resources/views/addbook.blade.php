@extends('welcome')
<form method="post"  action="{{route('book.store')}}">
        <label for="name">Ведите Назваине книги</label>
        <input type="text" name="name" value="{{$book->name}}" />
        <label for="datepub">Ведите дату издания</label>
        <input type="text" name="datepub" value="{{$book->datepub}}" />
        <label for="authors">Выберите автора</label>
        <input type="submit" value="Save"/>
    @csrf
    <select name="authorselect"  > 
    @foreach ($authors as $author)
    <option value='{{$author->init}}'  id="{{$author->id}}">  {{$author->init}} </option>
    </form> 
    @endforeach
  </select>
</form>







   

