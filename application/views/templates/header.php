<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="shortcut icon" href="<?php echo site_url('assets/img/logo_1.jpg');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<meta charset="utf-8">
<title>Чем заняться в свободное время</title>
</head>
<body>
	<div id="main-page">
		<div id="header-part">
			<div id="logo">
				<img src="<?php echo site_url('assets/img/log1.jpg');?>" class="headimage" alt="Логотип" name="pic">
			</div>

			<div id="counters">
				<a href="/"><img src="<?php echo site_url('assets/img/liveI.jpg');?>" width="120" alt="Логотип"></a> 
				<a href="/"><img src="<?php echo site_url('assets/img/hotLog.jpg');?>" width="120" alt="Логотип1"></a>
			</div>
		</div>

		<div id="horizontal-menu">
			<ul>
				<li><a href="/" id="mainitem">Главная</a></li>
				<li><a href="/news" id="newsitem">Новости</a></li>
				<li><a href="/decoupage" id="decoupageitem">Декупаж</a></li>
            	<li><a href="/felting" id="feltingitem">Фелтинг</a></li>
            	<li><a href="/sport" id="sportitem">Спорт</a></li>
            	<li><a href="/resume" id="resumeitem">О нас</a></li>
            	<li><a href="/admin" id="resumeitem">Профиль</a></li>
			</ul>
		</div>

		<div id="main-content">
                <?php include ('login_form.php'); ?>