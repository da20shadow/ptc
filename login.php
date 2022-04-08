<?php
require "db/config.php";
include "include/login.inc.php";

$username = $password = '';

//if (isset($_POST['submit'])) {
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    $sql = "SELECT username, password FROM members";
//    $result = mysqli_query($connect,$sql);
//    $login_verify = mysqli_fetch_all($result,MYSQLI_ASSOC);
//    $d_user = $login_verify['username'];
//    var_dump($login_verify['username']);
//
//
//    session_start();
//    $_SESSION['username'] = htmlentities($_POST['username']);
//    $_SESSION['password'] = htmlentities($_POST['password']);
//
//    header("Location: dashboard.php");
//
//
//    echo "123";
//
//}
?>
<?php include "header.php"; ?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <h1>Login Form</h1>
    <br>
    <div class="input-container">
        <label for="username"></label>
        <i class="fa fa-user icon"></i>
        <input type="text" name="username" placeholder="Username.." required value="<?php echo $username ;?>">
    </div>
    <div class="input-container">
        <label for="password"></label>
        <i class="fa fa-key icon"></i>
        <input type="password" name="password" placeholder="Password.." required value="<?php echo $password ;?>">
    </div>
    <button type="submit" name="login-submit">Login</button>
    <br>
    <p>Not a member? <a href="register.php">Create Accont</a></p>
</form>

<?php include 'footer.php';?>