<?php include_once('include/start.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $locale ?>">
<head>
<title><?php _e("Tools | Amemiya-daiku"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php _e("Tools used by Amemiya-daiku: Broadaxe, adze, rip saw"); ?>" />
<meta name="keywords" content="<?php _e("broadaxe, adze, rip saw, tools, shaping logs, axe, hand woodwork, squaring logs, timber, wood"); ?>" />
<?php require('include/head.php')?>
</head>

<body id="tools">

	<?php include_once("ga.php") ?>
	<?php require('include/header.php')?>
	<?php require('include/navigation.php')?>

	<div id="content">
		<h2 class="first"><?php _e("Tools"); ?></h2>
		<h3><?php _e("Broadaxe"); ?></h3>
		<p class="no-japanese">In medieval Japan somashi (杜師) were known for their accuracy and swiftness with the Japanese broadaxe, the masakari (鉞). They axes come in different shapes, but they are all meant to do the same. Squaring logs after they have been cut. This way the logs dry faster during transportation to the construction site or the manufacturer.</p>
		<?php
			$map = "tools/broadaxe";
			$file = "broadaxe";
			$alt = "Broadaxe";
			$n = 13;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g1\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Adze"); ?></h3>
		<p class="no-japanese">The adze, chouna (釿), was used to smooth the squared logs even further. If the adzing is done properly it does not take to great effort to give the timber a final finish by planing it. The adze has also different shapes. There are adzes used for smoothing, squaring and there are even adzes used for more decorative finishing.</p>
		<?php
			$map = "tools/adze";
			$file = "adze";
			$alt = "Adze";
			$n = 8;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g2\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		<h3><?php _e("Rip Saw"); ?></h3>
		<p class="no-japanese">The wide-bladed ripsaw maebiki-oga (前挽き大鋸) was yielded by the so called kobiki (木挽). This saw was used to cut boards out of logs and for squaring logs.</p>
		<?php
			$map = "tools/ripsaw";
			$file = "ripsaw";
			$alt = "Ripsaw";
			$n = 7;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g3\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
    </div>
    
	<?php require('include/footer.php')?>
	
</body>
</html>