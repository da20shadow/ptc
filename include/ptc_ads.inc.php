<?php
$sql = "SELECT * FROM ptc_ads ORDER BY timer";
$result = mysqli_query($connect,$sql);
$ptc_ads = mysqli_fetch_all($result,MYSQLI_ASSOC);
