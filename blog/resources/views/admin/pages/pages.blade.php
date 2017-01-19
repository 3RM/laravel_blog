@extends('admin.main')
@section('content')
<table>
	<tr>
		<td>id</td>
		<td>Название</td>
		<td>Действие</td>
		<td>Действие</td>
	</tr>
	@foreach ($pages as $page)
	<tr>
		<td>{{$page->id}}</td>
		<td><a href="/adminzone/pages/{{$page->id}}">{{$page->title}}</a></td>
		<td> <a href="{{action('PagesController@edit',['pages'=>$page->id])}}">Изменить</a></td>
		<td> 
			<form method="POST" action="{{action('PagesController@destroy',['pages'=>$page->id])}}">
				<input type="hidden" name="_method" value="delete"/>
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<input type="submit" value="Удалить"/>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection