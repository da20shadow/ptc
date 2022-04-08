<?php
include 'db/config.php';
session_start();
if (isset($_GET['ad_id'])){
$ad_id = $_GET['ad_id'];
$sql = "SELECT * FROM ptc_ads WHERE id = '$ad_id'";
$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_assoc($query);
$url_ad = $result['url'];
$timer = $result['timer'];

?>
<style>
    #myProgress {
        width: 100%;
        height: 10px;
        position: fixed;
        bottom: 0;
        background-color: #ddd;
    }

    #close {
        display: none;
        margin: auto;
        position: fixed;
        right: 45%;
        font-size: 21px;
        padding: 1px 25px;
        cursor: pointer;
    }

    #myBar {
        background-color: #4CAF50;
        width: 10px;
        height: 10px;
        position: absolute;
    }
</style>
<body onload="move()">
<div id="myProgress">
    <div id="myBar"></div>
</div>
<button id="close" onclick="window.close()">Close</button>

<iframe src="<?php echo $url_ad; ?>" frameborder="0" width="100%" height="100%"></iframe>
<p id="timer"><?php echo $timer; ?> </p>
<script>
    function move() {
        let timer = document.getElementById("timer");
        let elem = document.getElementById("myBar");
        let width = 0;
        let id = setInterval(frame, timer);
        let progress = document.getElementById('myProgress');
        let close = document.getElementById('close');

        function frame() {
            if (width == 100) {
                clearInterval(id);
                alert("Completed! $0.01 credited to your account!")
                progress.style.display = "none";
                close.style.display = "block";
            } else {
                width++;
                elem.style.width = width + '%';
            }
        }
    }
</script>
<?php }; ?>
</body>