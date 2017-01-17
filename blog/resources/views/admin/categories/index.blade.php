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
			<a href="/adminzone/categories/{{$category->id}}/edit">Изменить</a>
		</td>
		<td><span class="del">Удалить</span></td>
	</tr>	
@endforeach
</table>
@endsection