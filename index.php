<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
	include_once 'include/header.php';
?>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formbox">
				<form>
					<p>Naam</p>
					<input type="text" name="naam" placeholder="Voornaam">
					<p>E-mail</p>
					<input type="text" name="mail" placeholder="E-mail adres">
					<input type="submit" name="btn" value="Bevestigen">
					<a href="#">Hulp nodig?</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>