@extends('admin.main')
@section('content')
	<p>
		<a href="{{action('CategoriesController@index')}}" class="btn btn-primary btn-xs pull-left">Show categories list</a>
	</p>
	
<br>Название категории<br>
	
<form method="POST" action="{{action('CategoriesController@store')}}"/>
	<input type="text" name="title"/><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	<input type="submit" value="Сохранить">
	@if(Session::has('message'))
	{{Session::get('message')}}
	@endif
</form>
@endsection