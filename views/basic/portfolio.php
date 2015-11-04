<?php
	// запрет прямого обращения к файлу
	defined('MYPROJECT') or die("Доступ запрещён.");
?>
			<div class="carousel-title">Примеры работ</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="http://first.birthday.london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/birthday.jpg" /></a>
					</div>
					<div class="item">
						<a href="http://london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/London-Priority-Club.jpg" /></a>
					</div>
					<div class="item">
						<a href="http://business.london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/Business.jpg" /></a>
					</div>
					<div class="item">
						<a href="http://great.systems" target="_blank"><img src="<?=TEMPLATE?>img/Great-Systems.jpg" /></a>
					</div>
					<div class="item">
						<a href="https://icedigital.ru/" target="_blank"><img src="<?=TEMPLATE?>img/Ice-Digital.jpg" /></a>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="min_portfolio">
				<a href="http://first.birthday.london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/birthday.jpg" /></a>
				<a href="http://london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/London-Priority-Club.jpg" /></a>
				<a href="http://business.london-priority.com" target="_blank"><img src="<?=TEMPLATE?>img/Business.jpg" /></a>
				<a href="http://great.systems" target="_blank"><img src="<?=TEMPLATE?>img/Great-Systems.jpg" /></a>
				<a href="https://icedigital.ru/" target="_blank"><img src="<?=TEMPLATE?>img/Ice-Digital.jpg" /></a>
			</div>