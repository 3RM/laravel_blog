@extends('admin.main')
@section('content')
	<p>
		<a href="{{action('CategoriesController@index')}}" class="btn btn-primary btn-xs pull-left">Show categories list</a>
	</p>
	<form method="POST" action="{{action('CategoriesController@update',['category'=>$category->id])}}">
		<input type="hidden" name="_method" value="put">
	
		<br>Название категории:<br>
		<input type="text" name="title" value="{{$category->title}}"><br>
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" value="Сохранить">
	</form>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection