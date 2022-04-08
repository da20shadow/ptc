<?php
if (isset($_POST['login-submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id,username, password FROM members WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect,$sql);
    $members = mysqli_fetch_all($result,MYSQLI_ASSOC);


    if ($result > 0){
        session_start();
        $_SESSION['id'] = $members['id'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        $name = $_SESSION['username'];

        header("Location: dashboard.php");
    }else {
        header("Location: login.php");
    }
}