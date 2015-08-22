<?php include_once('include/start.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $locale ?>">
<head>
<title><?php _e("Exchange | Amemiya-daiku"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php _e("International exchange of carpenting craftsmanship skills."); ?>" />
<meta name="keywords" content="<?php _e("traditional skills, carpenters, international, craftsmanship, exchange, , craftsmen, Germany, Japan"); ?>" />
<?php require('include/head.php')?>
</head>

<body id="exchange">

	<?php include_once("ga.php") ?>
	<?php require('include/header.php')?>
	<?php require('include/navigation.php')?>
    
	<div id="content">
		<h2 class="first"><?php _e("International craftsmanship exchange"); ?></h2>
		<p><?php _e("In the past craftsmen from around the world gathered to share their native methods. Their common thought \"making homes connecting life\"."); ?></p>
		
		<h3><?php _e("2010, Japan"); ?></h3>
		<p><?php _e("Hosting the \"Chiisa-na Kezurokai in Ichinose\" in Koushuu-shi Inchinose. carpenters from Germany, England, Belgium, Sweden, Austria and Japan (70 in total) built two huts using only hand tools; a Japanese style and a European style."); ?></p>
		<?php
			$map = "exchange/kez2010";
			$file = "kez2010";
			$alt = "Kezuroukai 2010";
			$n = 44;
			echo "<div id=\"g2010\" class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g3\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>		
		
		<h3><?php _e("2007, Germany"); ?></h3>
		<p><?php _e("Building a large Torii in Germany with craftsmen from 5 different countries."); ?></p>
		<?php
			$map = "exchange/kez2007";
			$file = "kez2007";
			$alt = "Kezuroukai 2007";
			$n = 57;
			echo "<div id=\"g2007\" class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g2\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
		
		<h3><?php _e("2005, Germany"); ?></h3>
		<p><?php _e("Taking part in an international exchange to teach traditional Japanese skills and learn traditional Western skills in Germany for the first time."); ?></p>
		<?php
			$map = "exchange/kez2005";
			$file = "kez2005";
			$alt = "Kezuroukai 2005";
			$n = 21;
			echo "<div id=\"g2005\" class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g1\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>

    </div>
    
	<?php require('include/footer.php')?>
	
</body>
</html>