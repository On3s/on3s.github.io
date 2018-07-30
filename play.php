<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Режимы | Immortal Network</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Immortal Network">
	<meta name="author" content="NeonP/NeonGC">
	<link rel="shortcut icon" href="img/favicon.jpg">
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<?php require __DIR__ . '/header.php'; ?>

	<div class="container">
		<center>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1>Заходи к нам по IP <div class="accent">mc.immnw.ru</div>!</h1>
			<br>
			<br><button class="btn btn-lg btn-info" data-toggle="modal" data-target="#joinHelp">Как зайти на Immortal Network?</button></br>
		</center>
		<div class="modal fade" id="joinHelp" tabindex="-1" role="dialog" aria-labelledby="joinHelpLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="joinHelpLabel">Как зайти на Immortal Network?</h4>
					</div>
					<div class="modal-body">
						<p>Загрузите 1.10-1.12 версию клиента Minecraft, перейдите в Сетевая игра меню</p>
						<img class="img-responsive center-block" src="img/help/multiplayer.jpg">
						<hr>
						<p>Затем нажмите «Добавить»."</p>
						<img class="img-responsive center-block" src="img/help/addserver.jpg">
						<hr>
						<p>Введите имя сервера, например <b>Immortal Network</b>, и введите IP: <b>mc.immnw.ru</b>, затем нажмите <b>Готово</b></p>
						<img class="img-responsive center-block" src="img/help/done.jpg">
						<hr>
						<p>Теперь дважды щелкните сервер, который вы только что добавили, или выберите его и нажмите <b>Подключиться</b></p>
						<img class="img-responsive center-block" src="img/help/joinserver.jpg">
					</div>
					<div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button></div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 clearfix">
				<div class="thumbnail">
					<h2 class="text-center play-servertitle">Анархия</h2>
					<img src="img/servers/server1.jpg" class="img-rounded" alt="Server 1">
					<div class="text-center">
						<br>
						<p>На этом сервере нету правил. (ну, если не считать основных (маты, читы)). Вы появитесь на спавне где у вас будет выбор: бегать по нему или начать игру командой /rtp . Вы появитесь на рандомных координаторах (мир: 2000 блоков на 2000 блоков, но он круглый). Вам нужно быстро развиваться так как ваши противники не уступят вам. Они будут пытаться вас убить и загриферить вашу базу! Мы рекомендуем строить базу из обсидиана, потому что его может сломать только Визер. Заприватить территорию можно Только алмазным блоком! Улучшайте регион и он будет увеличиваться!</p>
					</div>
				</div>
			</div>
	
			<div class="col-md-4 clearfix">
				<div class="thumbnail">
					<h2 class="text-center play-servertitle">SkyBlock</h2>
					<img src="img/servers/server2.jpg" class="img-rounded" alt="Server 2">
					<div class="text-center">
						<br>
						<p>Наш SkyBlock не такой как на других серверах! У нас есть свои плюшки. К примеру: можно улучшать генератор на своём острове, можно покупать опыт за $ и ощутить весь гейм-плей СкайБлока!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require __DIR__ . '/footer.php'; ?>
</body>
</html>