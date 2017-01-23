<!DOCTYPE html>
<html>
<head>
	<meta charaset="utf-8"/>
	<title>Админка</title>
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
	<script>
		tinymce.init({selector: '#editor'});
	</script>
</head> 
<body> 
	<div id="header">
		<h1>Админка</h1>
	</div>
	<div id="content">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </body>
</html>