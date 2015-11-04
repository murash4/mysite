<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
	// подключение модели
	require_once MODEL;
	// првоерка вида (Главная, контакты, о себе)
	$view = empty($_GET['view']) ? 'portfolio' : $_GET['view'];
	// подключение вида
	require_once TEMPLATE."index.php";
?>