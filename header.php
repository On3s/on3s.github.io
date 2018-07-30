<head>
	<script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script>
		var clipboard = new Clipboard('.copy');
		clipboard.on('success', function(e) {
			console.log(e);
		});
		clipboard.on('error', function(e) {
			console.log(e);
		});
	</script>
</head>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
<div id="vk_community_messages"></div>
<script type="text/javascript">var widget = VK.Widgets.CommunityMessages("vk_community_messages", 150769354, {tooltipButtonText: "Есть вопрос? Нашли ошибку?"});</script>

<div class="navbar-wrapper">
	<div class="navbar navbar-default navbar-fixed navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header"><a class="navbar-brand accent" href="index.php"><strong>Immortal Network</strong></a></div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<?php $site = $_SERVER['REQUEST_URI'];
				if($site == '/index.php' || $site == '/' || $site == '/play.php' || $site == '/info.php' || $site == '/shop.php' || $site == '/rules.php'){
					if($site == '/index.php' || $site == '/'){ ?>
						<li class="active"><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
						<li><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
						<li><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
						<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
						<li><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
					<?php } if($site == '/play.php'){ ?>
						<li><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
						<li class="active"><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
						<li><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
						<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
						<li><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
					<?php } if($site == '/info.php'){ ?>
						<li><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
						<li><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
						<li class="active"><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
						<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
						<li><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
					<?php } if($site == '/shop.php'){ ?>
						<li><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
						<li><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
						<li><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
						<li class="active"><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
						<li><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
					<?php } if($site == '/rules.php'){ ?>
						<li><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
						<li><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
						<li><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
						<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
						<li class="active"><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
					<?php } ?>
				<?php } else{ ?>
					<li><a href="index.php"><i class="fa fa-home"></i> Главная</a></li>
					<li><a href="play.php"><i class="fa fa-gamepad"></i> Режимы</a></li>
					<li><a href="info.php"><i class="fa fa-comments-o"></i> Инфо</a></li>
					<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Магазин</a></li>
					<li><a href="rules.php"><i class="fa fa-check-square-o"></i> Правила</a></li>
				<?php } ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<a href="play.php" data-clipboard-text="Mc.Immnw.Ru" class="copy btn btn-info navbar-btn navbar-right hidden-sm hidden-xs">IP: mc.immnw.ru</a>
				</ul>
			</div>
		</div>
	</div>
</div>
</link>
