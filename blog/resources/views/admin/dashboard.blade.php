<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>

        <link rel="stylesheet" type="text/css" href="<?=asset('/css/style.css')?>" />
        
    </head>
    <body>        
		<h1>Админка</h1>
		<div class="container">
		<div class="row">
			<div class="col-md-3">
			<h2>Статьи</h2>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="/adminzone/articles"><i class="fa fa-list-alt fa-fw"></i>Все статьи</a></li>
					<li><a href="adminzone/articles/create"><i class="fa fa-file-o fa-fw"></i>Добавить статью</a></li>
				</ul>
			<h2>Категории</h2>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="adminzone/categories"><i class="fa fa-list-alt fa-fw"></i>Все категории</a></li>
					<li><a href="adminzone/categories/create"><i class="fa fa-file-o fa-fw"></i>Добавить категорию</a></li>
				</ul>
			<h2>Комментарии</h2>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="/adminzone/comments"><i class="fa fa-pencil fa-fw"></i>Все комментарии</a></li>                
				</ul>
			</div>
			<h2>Страницы</h2>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="/adminzone/pages"><i class="fa fa-pencil fa-fw"></i>Все страницы</a></li>                
				</ul>
			</div>
		</div>
		</div>

				
    </body>
</html>
