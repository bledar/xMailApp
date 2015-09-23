<!DOCTYPE html>
<html>
<head>
	<title>xMailApp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="njoftim">
		bosh
	</div>
	<div class="forma">
		<h1>EmailApp</h1>
		<form id="mailForm" accept-charset="utf-8">
			<input type="email" name="marresi" value="" placeholder="Adresa marresit">
			<input type="email" name="derguesi" value="" placeholder="Adresa derguesit">
			<input type="text" name="subjekti" value="" placeholder="Subjekti">
			<textarea name="teksti" placeholder="Mesazhi" id="editor1" rows="10" cols="40"></textarea>
			<input type="submit" name="dergo" value="Dergo">
		</form>	
		
	</div>
	<script src="jquery-1.11.2.min.js"></script>
	<script src="script.js"></script>
</body>
</html>