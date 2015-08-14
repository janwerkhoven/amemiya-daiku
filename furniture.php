<?php include_once('include/start.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $locale ?>">
<head>
<title><?php _e("Furniture | Amemiya-daiku"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php _e("Furniture made by Amemiya-daiku"); ?>" />
<meta name="keywords" content="<?php _e("furniture, carpentry, wood, chair, table"); ?>" />
<?php require('include/head.php')?>
</head>

<body id="furniture">

	<?php include_once("ga.php") ?>
	<?php require('include/header.php')?>
	<?php require('include/navigation.php')?>
    
    <div id="content">
		<h2><?php _e("Furniture"); ?></h2>
		<?php
			$map = "furniture";
			$file = "furniture";
			$alt = "Furniture";
			$n = 10;
			echo "<div class=\"gallery\">";
			for ($i=1;$i<$n+1;$i++){echo "<a href=\"images/" . $map . "/" . $file . "-" .$i . ".jpg\" class=\"g1\"><img src=\"images/" . $map . "/thumbs/" . $file . "-" . $i . ".jpg\" width=\"115\" height=\"77\" alt=\"" . $alt . "\" /></a>";};
			echo "</div>";
		?>
    </div>
    
	<?php require('include/footer.php')?>
	
</body>
</html>