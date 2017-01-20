@extends('admin.main')
@section('content')
<a href="{{action('PagesController@index')}}" class="btn btn-primary btn-xs pull-left"><b>Show pages list</a>
<table>
	<tr>
		<td>{{$page->title}}</td>
		<td>{{$page->content}}</td>
	</tr>
</table>
@endsection