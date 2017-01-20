@extends('admin.main')
@section('content')
	<p>
		<a href="{{action('PagesController@index')}}" class="btn btn-primary btn-xs pull-left">Show pages list</a>
	</p>
	<form method="POST" action="{{action('PagesController@update',['page'=>$page->id])}}">
		<input type="hidden" name="_method" value="put">
	
		<br>Название страницы:<br>
		<input type="text" name="title" value="{{$page->title}}"><br>
		Текст страницы:<br>
		<textarea name="content">{{$page->content}}</textarea><br>
		
		Опубликовать?<br>
		<select name="public">
		<option value="1">Да</option>
		<option value="0">Нет</option>
		</select>
		<br>
		<h2>Мета</h2>
		description:<br>
		<input type="text" name="meta_description"><br>
		keywords:<br>
		<input type="text" name="meta_keywords"><br>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" value="Сохранить">
	</form>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection