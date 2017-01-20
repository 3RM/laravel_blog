@extends('admin.main')
@section('content')

<table class="table table-striped custab">
    <thead>
    <a href="{{action('CategoriesController@index')}}" class="btn btn-primary btn-xs pull-left"><b>Show categories list</a>
        <tr>
            <th>ID</th>
            <th>Title</th>
			<th class="text-center">Action</th>  			
        </tr>
    </thead>
	<tr>
		<td>{{$category->id}}</td>
		<td>{{$category->title}}</td>
		<td class="text-center">
					<a class='btn btn-info btn-xs' href="{{action('CategoriesController@edit',['categories'=>$category->id])}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					<form method="POST" action="{{action('CategoriesController@destroy',['category'=>$category->id])}}">
					<input type="hidden" name="_method" value="delete"/>
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<button class="glyphicon glyphicon-remove btn btn-danger btn-xs">Delete</button>
				</form>
				</td>
	</tr>
</table>
@endsection