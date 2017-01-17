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
		<td>{{$category->title}}</td>
		<td>
			<!--<a href="{{action('CategoriesController@edit',['categories'=>$category->id])}}">Изменить</a>-->
			<a href="/adminzone/categories/1/edit>Изменить</a>
		</td>
		<td><span class="del">Удалить</span></td>
	</tr>
</table>
@endforeach
@endsection