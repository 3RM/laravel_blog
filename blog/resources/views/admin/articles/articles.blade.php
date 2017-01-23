@extends('admin.main')
@section('content')
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{action('ArticlesController@create')}}" class="btn btn-primary btn-xs pull-left"><b>+</b> Add new article</a>
        <tr>
            <th>ID</th>
            <th>Preview</th>
			<th>Title</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
			@foreach ($articles as $article)
            <tr>
				<td>{{$article->id}}</td>
                <td><img width=35 height=35 src="{{$article->preview}}"></td></td>
				<td><a href="{{action('ArticlesController@show',['id'=>$article->id])}}">{{$article->title}}</a></td>
                <td class="text-center">
					<a class='btn btn-info btn-xs' href="{{action('ArticlesController@edit',['articles'=>$article->id])}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					<form method="POST" action="{{action('ArticlesController@destroy',['article'=>$article->id])}}">
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