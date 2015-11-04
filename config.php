<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
	// домен
	define('PATH', 'http://localhost/myproject/');
	// модель
	define('MODEL', 'model/model.php');
	// контроллер
	define('CONTROLLER', 'controller/controller.php');
	// вид
	define('VIEW', 'views/');
	// активный шаблон
	define('TEMPLATE', VIEW.'basic/');
	// сервер
	define('HOST', 'localhost');
	// пользователь
	define('USER', 'singleant');
	// пароль
	define('PASS', 'murash');
	// БД
	define('DB', 'myproject');
	// название сайта (title)
	define('TITLE', 'Верстка сайтов на заказ');
	// подключение к серверу БД
	// mysql_connect(HOST, USER, PASS) or die("Нет соединения с сервером.");
	// // подключение к БД
	// mysql_select_db(DB) or die("Нет соединения с базой данных.");
	// // установка кодировки соединения
	// mysql_query("SET NAMES 'UTF8'") or die("Не получилось установить кодировку соединения.");
?>