<?php
include 'db/config.php';
include 'include/ptc_ads.inc.php';
include "header.php";
?>
<div class="ptc-ads">
    <?php foreach ($ptc_ads as $ad){ ;?>

    <div class="ad">
        <a href="adview.php?ad_id=<?php echo $ad['id'] ;?>" target="_blank">
            <p class="ptc-title"><?php echo $ad['title'] ;?></p>
            <p class="ptc-description"><?php echo $ad['description'] ;?></p>
        </a>
        <span>Timer: <?php echo $ad['timer'] ;?>sec.</span>
    </div>

    <?php } ;?>
</div>
