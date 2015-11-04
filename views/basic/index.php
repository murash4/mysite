<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Верстка сайтов качественно</title>
		<meta name="description" content="Занимаюсь версткой сайтов. Верстаю качественно, недорого и в установленный срок.">
		<meta name="keywords" content="site, сайт, создание сайтов, разработка сайтов, сайт-визитка, landing, landing page, лэндинг, корпоративный сайт, интернет-магазин, HTML5, CSS3, LESS, JsvaScript, JS, jQuery, jQueryUI, Bootstrap, адаптивно, адаптивный, под мобильные устройства, кроссбраузерно, кроссбраузерный">
		<link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>css/bootstrap-theme.min.css">
		<script type="text/javascript" src="<?=TEMPLATE?>js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?=TEMPLATE?>js/jquery.maskedinput.min.js"></script>
		<script type="text/javascript" src="<?=TEMPLATE?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=TEMPLATE?>js/scripts.js"></script>
	</head>
	<body>
		<?php require_once "inc/header.php" ?>
			<?php require_once "$view.php"; ?>
		<?php require_once "inc/footer.php" ?>
	</body>
</html>