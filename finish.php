<?php include_once('include/start.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $locale ?>">
<head>
<title><?php _e("Finish | Amemiya-daiku"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php _e("Finish techniques by Amemiya-daiku"); ?>" />
<meta name="keywords" content="<?php _e("carpentry, adze finishing, masakari finishing, wooden shingles, clay wall, amemiya-daiku"); ?>" />
<?php require('include/head.php')?>
</head>

<body id="finish">

	<?php include_once("ga.php") ?>
	<?php require('include/header.php')?>
	<?php require('include/navigation.php')?>

	<div id="content">
		<h2><?php _e("Choose your finish"); ?></h2>
		<h3><?php _e("Adze finishing"); ?></h3>
		<?php
			$map = "finish/adze-finishing";
			$file = "adze-finishing";
			$alt = "Adze finishing";
			$n = 4;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g1\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Masakari finishing"); ?></h3>
		<?php
			$map = "finish/masakari-finishing";
			$file = "masakari-finishing";
			$alt = "Masakari finishing";
			$n = 3;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g2\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Wooden shingles"); ?></h3>
		<?php
			$map = "finish/wooden-shingles";
			$file = "wooden-shingles";
			$alt = "Wooden Shingles";
			$n = 2;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g3\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Clay wall"); ?></h3>
		<?php
			$map = "finish/clay-wall";
			$file = "clay-wall";
			$alt = "Clay wall";
			$n = 14;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g4\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
    </div>
    
	<?php require('include/footer.php')?>
	
</body>
</html>