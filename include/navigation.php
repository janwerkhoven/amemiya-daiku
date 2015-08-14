<div id="navigation">
    <div class="menu">
        <ul>
            <li><a href="index.php<?php echo "?l=" . $locale; ?>"><?php _e("About"); ?></a></li>
            <li id="x1"><a href=""><?php _e("Portfolio"); ?></a></li>
            <ul>
                <li><a href="buildings.php<?php echo "?l=" . $locale; ?>"><?php _e("Buildings"); ?></a></li>
                <li><a href="furniture.php<?php echo "?l=" . $locale; ?>"><?php _e("Furniture"); ?></a></li>
                <li><a href="exchange.php<?php echo "?l=" . $locale; ?>"><?php _e("International"); ?></a></li>
            </ul>
            <li><a href="tools.php<?php echo "?l=" . $locale; ?>"><?php _e("Tools"); ?></a></li>
            <li><a href="ocha-he-ie.php<?php echo "?l=" . $locale; ?>"><?php _e("Ocha-He-Ie"); ?></a></li>
            <li><a href="finish.php<?php echo "?l=" . $locale; ?>"><?php _e("Choose your finish"); ?></a></li>
            <li><a href="links.php<?php echo "?l=" . $locale; ?>"><?php _e("Links"); ?></a></li>
            <li><a href="contact.php<?php echo "?l=" . $locale; ?>"><?php _e("Contact"); ?></a></li>
        </ul>
    </div>
    <?php
    $thisPage = explode("?",$_SERVER['REQUEST_URI']);
    $thisPage = substr($thisPage[0],1);
    if ($_SESSION[LANG] == 'en') {
        echo '<div class="language" id="ja"><a href="' . $thisPage . '?l=ja" title="日本語"><img src="images/jp.png" width="16" height="11" alt="japanese flag icon" />日本語</a></div>';
    } else {
        echo '<div class="language" id="en"><a href="' . $thisPage . '?l=en" title="Change language to English"><img src="images/us.png" width="16" height="11" alt="american flag icon" /><img src="images/en.png" width="16" height="11" alt="english flag icon" />English</a></div>';
    }
    ?>
</div>