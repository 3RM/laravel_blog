@extends('admin.main')
@section('content')
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{action('PagesController@create')}}" class="btn btn-primary btn-xs pull-left"><b>+</b> Add new page</a>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
			@foreach ($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
				<td><a href="{{action('PagesController@show',['id'=>$page->id])}}">{{$page->title}}</a></td>
                <td class="text-center">
					<a class='btn btn-info btn-xs' href="{{action('PagesController@edit',['pages'=>$page->id])}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					<form method="POST" action="{{action('PagesController@destroy',['pages'=>$page->id])}}">
					<input type="hidden" name="_method" value="delete"/>
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<button class="glyphicon glyphicon-remove btn btn-danger btn-xs">Delete</button>
				</form>
				</td>
            </tr>
			@endforeach            
    </table>
    
</div>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection