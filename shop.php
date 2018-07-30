<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Магазин | Immortal Network</title>
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
<body>
<?php require __DIR__ . '/header.php'; ?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="featured">
						<div class="jumbotron">
							<h1>Популярные товары</h1>
							<p>Новые и по скидке!</p>
						</div>
						<div class="col-md-12">
							<h2>Premium <small></small></h2>
							<p>Отличная привилегия</p>
							<p>
								<button class="btn btn-default" data-toggle="modal" data-target="#modal1">Информация</button>
								<button class="btn btn-success pull-right"><i class="fa fa-shopping-cart"></i> 140 рублей</button>
							</p>
						</div>
						<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Premium</h4>
									</div>
									<div class="modal-body">
										Права можно посмотреть в хабе
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Закрыть</button>
										<button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"></i> 140 рублей</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Ultra <small>ХИТ</small></h2>
							<p>Ultra содержит в себе самые нужные команды</p>
							<p>
								<button class="btn btn-default" data-toggle="modal" data-target="#modal2">Информация</button>
								<button class="btn btn-success pull-right"><i class="fa fa-shopping-cart"></i> 230 рублей</button>
							</p>
						</div>
						<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Ultra</h4>
									</div>
									<div class="modal-body">
										Права можно посмотреть в хабе
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Закрыть</button>
										<button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"></i> 230 рублей</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Legend <small></small></h2>
							<p>Эта привлегия самая лучшая и она даст вам верх возможностей нашего сервера</p>
							<p>
								<button class="btn btn-default" data-toggle="modal" data-target="#modal3">Информация</button>
								<button class="btn btn-success pull-right"><i class="fa fa-shopping-cart"></i> 400 рублей</button>
							</p>
						</div>
						<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Legend</h4>
									</div>
									<div class="modal-body">Анархия: 7 приватов, команды /heal, /feed, /repair</div>
									<div class="modal-body">СкайБлок: команды /wb, /ec, /ptime, /feed, /fireball, /ci, /firework, /repair all, /kit voin, /invsee (не сможите брать чужие вещи), /heal, /feed (2 уровня) </div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Закрыть</button>
										<button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"></i> 400 рублей</button>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="tab1">
						<div class="jumbotron">
							<h1>Анархия</h1>
							<p>Яйца, книги и другое</p>
						</div>
						<div class="col-md-4">

							<div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="text-center">Яйца</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">От 60 рублей</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца коровы</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца ифрита</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца крипера</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца скелетов иссушителей</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца скелетов</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйца слизня</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйцо грибной коровы</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Яйцо спрутов</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-info" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h4 class="text-center">Книги</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">От 50 рублей</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на прочность 3</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на защиту 4</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на острату 5</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на добычу 3</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на отдачу 2</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на заговор огня 2</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на силу 5</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на бесконечность</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Книга на шелковое касание</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-success" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h4 class="text-center">Другое</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">От 70 рублей</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Спавнер</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Опыт</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Придметы</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-danger" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab2">
						<div class="jumbotron">
							<h1>SkyBlock</h1>
							<p>Киты, Опыт и другое</p>
						</div>
						<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="text-center">Киты</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">От 50 рублей</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Кит фермер</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Кит воин</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Кит шахтёр</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Кит мобфер</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-info" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h4 class="text-center">Опыт</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">25р</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>25 уровень</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>50 уровень</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>100 уровень</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>200 уровень</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-success" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h4 class="text-center">Другое</h4>
								</div>
								<div class="panel-body text-center">
									<p class="shop-pricepanel">От 160 рублей</p>
								</div>
								<ul class="list-group list-group-flush text-center">
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Спавнера мобов</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Полёт</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Сундуки</li>
									<li class="list-group-item"><i class="icon-ok text-danger"></i>Монетки ($)</li>
								</ul>
								<div class="panel-footer">
									<a class="btn btn-lg btn-block btn-danger" href=""><i
									class="fa fa-shopping-cart"></i> Купить</a>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="tab3">
						<div class="jumbotron">
							<h1>Байты</h1>
							<p>Привилегии, эффекты</p>
						</div>
						<p>За байты можно купить привилегию или эффекты в хабе</p>
						<select name="package" class="form-control input-lg">
							<option>15 байтов стоит 15 рублей</option>
							<option>50 байтов стоит 50 рублей</option>
							<option>100 байтов стоит 100 рублей</option>
							<option>600 байтов стоит 500 рублей</option>
							<option>1200 байтов стоит 1000 рублей</option>
						</select>
						<br/>
						<button type="submit" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i>Купить</button>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<br>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#featured" data-toggle="pill">Популярные</a>
					</li>
					<li><a href="#tab1" data-toggle="pill">Анархия</a>
					</li>
					<li><a href="#tab2" data-toggle="pill">SkyBlock</a>
					</li>
					<li><a href="#tab3" data-toggle="pill">Байты</a>
					</li>
				</ul>
				<br>
			</div>
		</div>
	</div>

<?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
