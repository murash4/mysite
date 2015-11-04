<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
?>
			<form action="<?=TEMPLATE?>mail.php">
				<div class="title">Оставьте свои контактные данные</div>
				<div class="left_block">
					<label for="name">Имя*:</label><br />
					<input type="text" id="name" name="name" /><br />
					<label for="email">Email*:</label><br />
					<input type="email" novalidate id="email" name="email" /><br />
					<label for="phone">Телефон*:</label><br />
					<input type="text" novalidate id="phone" name="phone" />
				</div>
				<div class="right_block">
					<label for="message">Сообщение*:</label><br />
					<textarea name="message" id="message"></textarea>
				</div>
				<div class="note">* Поля обязательны для заполнения</div>
				<button type="submit" id="submit" name="submit">Отправить</button>
			</form>
			<div class="send">Ваше сообщение отправлено</div>