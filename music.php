<!DOCTYPE html>
<html>
<head>
	<title>music choice</title>
	<link rel="stylesheet" type="text/css" href="music.css">
</head>
<body>
<?php
	include_once 'include/header.php';
?>
	<div class="container">
		<div class="left">
      <div class="formboxl">
        <p>#1 liedje</p>
              <input type="text" name="naam" placeholder="Titel">
              <input type="text" name="artist" placeholder="Artiest">
              <input type="text" name="link" placeholder="Youtube-link">
              <p>#2 liedje</p>
              <input type="text" name="naam" placeholder="Titel2">
              <input type="text" name="artist" placeholder="Artiest">
              <input type="text" name="link" placeholder="Youtube-link">
      </div>
    </div>
		<div class="right">
			<div class="formboxr">
				<form>
				
          <p>#3 liedje</p>
          <input type="text" name="naam" placeholder="Titel">
          <input type="text" name="artist" placeholder="Artiest">
          <input type="text" name="link" placeholder="Youtube-link">
          
          <input type="submit" name="btn" value="Aanpassen" id="change">
          <input type="submit" name="btn" value="Opslaan" id="save">
					<a href="#">Hulp nodig?</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>