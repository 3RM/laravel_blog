@extends('admin.main')
@section('content')
<form action="" method="post">
	{{ csrf_field() }}
    <input type="hidden" name="id" value="<?= $category['id'] ?>"/>
    <input type="text" name="title" value="<?= $category['title'] ?>">    
    <input type="submit" value="edit">
</form>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@endsection