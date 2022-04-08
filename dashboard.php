<?php
include('header.php');
include_once('db/config.php');
$member_id = $_SESSION['username'];
$sql_stat = "SELECT money,credits FROM members WHERE username = '$member_id'";
$res = mysqli_query($connect,$sql_stat);
$money = mysqli_fetch_assoc($res);


?>

<?php if (isset($_SESSION['username'])) {;?>
<div class="welcome">
    Hello, <?php echo htmlentities($_SESSION['username']) ;?>!
    Welcome to the dashboard!
</div>
<div class="container">
    <div class="item">
        <p>$<?php echo htmlentities($money['money']) ;?></p>
        <p>Account Balance</p>
    </div>
    <div class="item">
        <p>$22,36</p>
        <p>Total withdrawals</p>
    </div>
    <div class="item">
        <p><?php echo htmlentities($money['credits']) ;?></p>
        <p>PTC Credits</p>
    </div>
</div>

<?php }else{
    header("Location: login.php");
} ;?>