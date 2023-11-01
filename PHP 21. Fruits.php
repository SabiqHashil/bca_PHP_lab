<!--
    21 - Aim:
    Write an HTML page to display a list of fruits in a list box. Write php program to
    display the selected fruits in a webpage.
-->



<!DOCTYPE html>
<html>
	<body>
		<form action="" method="POST">
			Choose your favorite fruit: <br><br>
			<select name="f">
				<option value="...">(Please Select)
				<option value="Grape">Grape
				<option value="Banana">Banana
				<option value="Apple">Apple
				<option value="Orange">Orange
				<option value="Pineapple">Pineapple
			</select> <br><br>
			
			<input type="submit" value="SELECT">
		</form>
	</body>
</html>

<?php

	if($_POST) {
		echo "<h2> You have indicated that you like </h2>";
		echo $_POST['f'];
	}

?>