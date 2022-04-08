<?php
include_once "db/config.php";

include "includes/signup.inc.php";
?>

<?php include "header.php";?>
<div class="<?php echo htmlspecialchars($show) ;?>">
    SUCCESSFULLY REGISTERED!
    <button><a href="login.php">LOGIN</a></button>
</div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="<?php echo htmlspecialchars($hide_form) ;?>">
    <h1>Registration Form</h1>
    <br>
    <div class="input-container">
        <label for="username"></label>
            <i class="fa fa-user icon"></i>
            <input type="text" name="username" placeholder="Username.." required value="<?php htmlspecialchars($username) ;?>">
        </div>
    <div class="input-container">
        <label for="email"></label>
            <i class="fa fa-envelope icon"></i>
            <input type="email" name="email" placeholder="Email.." required value="<?php htmlspecialchars($email) ;?>">
        </div>
    <div class="input-container">
        <label for="password"></label>
            <i class="fa fa-key icon"></i>
            <input type="password" name="password" placeholder="Password.." required value="<?php htmlspecialchars($password) ;?>">
        </div>
    <div class="input-container">
        <label for="re-password"></label>
            <i class="fa fa-key icon"></i>
            <input type="password" name="re-password" placeholder="Re-password.." required value="<?php htmlspecialchars($re_password) ;?>">
        </div>
    <button type="submit" name="submit">Create Account</button>
    <br>
    <p>Already registered? <a href="login.php">Login</a></p>
</form>

<?php include 'footer.php';?>