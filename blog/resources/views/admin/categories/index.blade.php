@extends('admin.main')
@section('content')
<table>
	<tr>
		<td>id</td>
		<td>Название</td>
		<td>Действие</td>
		<td>Действие</td>
	</tr>
	
	@foreach ($categories as $category)
	<tr>
		<td>{{$category->id}}</td>
		<td>{{$category->title}}</td>
		
		<td>			
			<a href="/adminzone/categories/edit/{{$category->id}}">Изменить</a>
		</td>
		<td>
			<form action="/adminzone/categories/delete/<?= $category['id']?>" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-danger">Удалить категорию</button>
			</form>
		</td>
	</tr>	
@endforeach
</table>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection