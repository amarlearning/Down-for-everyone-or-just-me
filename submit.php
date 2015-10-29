<?php
$host = $_POST['name'];
if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
$value = 1 ;
fclose($socket);
} else {
$value = 0 ;
echo pg_ping(127.0.0.1);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Down For Everyone Or Just Me -> Check if your website is down or up?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="parent">
<?php if($value == 1) { ?>

	
	<div class="sub"><p>It's Just you. <a href="<?php echo 'http://'. $host; ?>" style="color:#64B5F6"> <?php echo 'http://'.$host; ?></a> is up for everyone.</p></div><img src="like.jpg" style="width:60px;height:60px;border-radius:100%;margin-top:-20px">
	<?php } else { ?>
	<div class="sub"><p>It's not you. <a href="<?php echo 'http://'.$host; ?>" style="color:#ff5500"> <?php echo 'http://'.$host; ?></a> is down for everyone.</p><br></div><img src="images.png" style="width:60px;height:60px;border-radius:100%;margin-top:-20px">
<?php } ?>
</div>
	<div class="parent" style="margin-top:-70px"><br><br><br><br><p style="font-size:20px"><a href="index.php" style="color:#008855">Down For Everyone Or Just Me.? Check Onother</a></p></div>
</body>
</html>