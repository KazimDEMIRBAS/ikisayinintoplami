 
<?php
$s1=0;
$s2=0;
$toplam=0;
 
if(isset($_POST["add"]))
{
	$s1=$_POST["s1"];
	$s2=$_POST["s2"];
	$toplam=$s1+$s2;
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP İki Sayının Toplamı</title>
<style>
	label{
		display: block;
	}
		
</style>
</head>
 
<body>
	<h1>Girilen İki Sayının Toplamı:<?=$toplam?></h1>
	<form method="post">
		<label>Sayı 1:
			<input type="text" name="s1" value="<?=$s1?>">
		</label>
		<label>Sayı 2:
			<input type="text" name="s2" value="<?=$s2?>">
		</label>
		<button type="submit" name="add">İki Sayıyı Topla</button>
	</form>
</body>
</html>
 