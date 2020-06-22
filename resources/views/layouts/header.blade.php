<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 @yield('title')
 <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
	<div class="blok-menu">
		<ul class="menu">
			<li><div class="logo">
				<img src="img/logo5.png">
				
			</div></li>
			<li><a href="/index">Главная</a></li>
			<li><a href="/yslugi">Каталог</a></li>
			<li><a href="/contakt">Контакты</a></li>
			<li><a href="/onas">Адрес</a></li>
		</ul>
	</div>
	
	@yield('content')
	
</body>
</html>
