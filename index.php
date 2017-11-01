<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "Марсель Фаткуллин";
	require_once "blocks/head.php" 
	?>
</head>
<body>

	<?php require_once "blocks/header.php" ?>

	<div id="wrapper">
		<div id="leftCol">
							<h2>Мои работы</h2>
			<div id="bigArticle">
				<img src="img/articles/1.png" alt="Статья 1" title="Статья 1">
				<h2>Encryption</h2>
				<p>Программное обеспечение позволяющее зашифровывать и дешифровывать различного размера исходные тексты, доступны виды шифрования: шифр Цезаря, Вижинера и шифрование биграммами</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="clear">
				<br>
			</div>
			<div class="article">
				<img src="img/articles/2.png" alt="Статья 2" title="Статья 2">
				<h2>Buble Shoter 2D</h2>
				<p>2D шутер для ПК, есть возможность пройти 6 волн, на каждой новой волне увеличивается количество противников, при соударении противника и игрока - проигрыш, противники могут отскакивать от стен, что позволяет увеличить продолжительность игры.</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="article">
				<img src="img/articles/3.png" alt="Статья 3" title="Статья 3">
				<h2>Морфологический анализатор</h2>
				<p>Программное обеспечение "Морфологический анализатор" считает количество вхождений букв и биграмм в русском тексте. Необходимо добавить текст (любого размера) и выбрать необходимый пункт меню: считать буквы либо считать биграммы.</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="clear">
				<br>
			</div>
			<div class="article">
				<img src="img/articles/4.png" alt="Статья 4" title="Статья 4">
				<h2>Морфологический анализатор</h2>
				<p>Программное обеспечение "Морфологический анализатор" считает количество вхождений букв и биграмм в русском тексте. Необходимо добавить текст (любого размера) и выбрать необходимый пункт меню: считать буквы либо считать биграммы.</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="article">
				<img src="img/articles/5.png" alt="Статья 5" title="Статья 5">
				<h2>Конференция</h2>
				<p>Метод оптимизации процесса интеграционного тестирования в среде Visual Studio.</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
		</div>

		<?php require_once "blocks/rightCol.php" ?>

	</div>

		<?php require_once "blocks/footer.php" ?>

</body>
</html>