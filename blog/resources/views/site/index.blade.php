<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Блог</title>
</head>
<body>
	@foreach($articles as $article)
		
		<small>Дата статьи: {{$article->updated_at}}</small>
		<p><a href="/show/{{$article->id}}">{{$article->title}}</a></p></br>
		<div>
			<img src="{{$article->preview}}" width="150" height="150"/></br>
			{{str_limit($article->content, 50)}} <!--str_limit - это еще один хелпер Laravel, который обрезает строку до указанного знака и в конце добавляем три точки-->
		</div>
	@endforeach
</body>
</html>