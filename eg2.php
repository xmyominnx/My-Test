<form action="" method="post">
<input type="text" name="user" placeholder="Username"><br><br>
<input type="password" name="pass" placeholsder="Password"><br><br>
<h3>Choose Color</h3>
<input type="checkbox" name="color[]" value="red">Red<br><br>
<input type="checkbox" name="color[]" value="green">Green<br><br>
<input type="checkbox" name="color[]" value="blue">Blue<br><br>
<h3>Choose Gen</h3>
<input type="radio" name="myradio" value="male">Male<br><br>
<input type="radio" name="myradio" value="emale">Female<br><br>
<input type="file" name="file" value="Choose file"><br><br>
<input type="submit" name="submit" value="Register">
</form>
<?php
if (isset($_POST['submit'])) {
	$name=$_POST['user'];
	$psw=$_POST['pass'];
	$colors=$_POST['color'];
	$rad=$_POST['myradio'];
	$files=$_POST['file'];
	echo "Hello ".$name." your gen is ".$rad." and your upload file is ".$files ;
	foreach ($colors as $color) {
		echo " and your choosen color is ".$color;
	}
		
}
?>