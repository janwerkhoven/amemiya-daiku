<?php include_once('include/start.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $locale ?>">
<head>
<title><?php _e("Buildings | Amemiya-daiku"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php _e("Buildings and construction built by Amemiya Daiku"); ?>" />
<meta name="keywords" content="<?php _e("buildings, genkan, morikawa, sendogaya, shiono, tomohana, amemiya daiku"); ?>" />
<?php require('include/head.php')?>
</head>

<body id="buildings">

	<?php include_once("ga.php") ?>
	<?php require('include/header.php')?>
	<?php require('include/navigation.php')?>

	<div id="content">
		<h2><?php _e("Buildings"); ?></h2>
		<h3><?php _e("Tomohana"); ?></h3>
		<?php
			$map = "buildings/tomohana";
			$file = "tomohana";
			$alt = "Tomohana";
			$n = 12;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g5\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Genkan"); ?></h3>
		<?php
			$map = "buildings/genkan";
			$file = "genkan";
			$alt = "Genkan";
			$n = 14;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g1\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Morikawa"); ?></h3>
		<?php
			$map = "buildings/morikawa";
			$file = "morikawa";
			$alt = "Morikawa";
			$n = 18;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g2\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Sendogoya"); ?></h3>
		<?php
			$map = "buildings/sendogoya";
			$file = "sen";
			$alt = "Sendogoya";
			$n = 23;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g3\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Shiono"); ?></h3>
		<?php
			$map = "buildings/shiono";
			$file = "shiono";
			$alt = "Shiono";
			$n = 49;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g4\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
    </div>
    
	<?php require('include/footer.php')?>
	
</body>
</html>