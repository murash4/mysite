<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
?>
		<section class="main_wrap">
			<nav>
				<ul>
					<li><a href="?view=portfolio" <?php if($view=="portfolio") {echo 'class="active"';} ?>>Главная</a></li>
					<li><a href="?view=contacts" <?php if($view=="contacts") {echo 'class="active"';} ?>>Контакты</a></li>
					<li><a href="?view=about" <?php if($view=="about") {echo 'class="active"';} ?>>О себе</a></li>
				</ul>
			</nav>