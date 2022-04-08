<?php
$errors = ['username'=>'', 'email'=>'', 'password'=>'','re-password'=>''];
$username = $email = $password = $re_password = '';
$show = htmlspecialchars("hidden");
$hide_form = '';
if (isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $re_password = htmlspecialchars($_POST['re-password']);

    if (empty($_POST['username'])){
        $errors['username'] = "You must add username";
    }
    if (empty($_POST['email'])){
        $errors['email'] = "You must add email";
    }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Please Enter Valid Email!";
    }
    if (empty($_POST['password'])){
        $errors['password'] = "You must add password";
    }
    if (empty($_POST['re-password'])){
        $errors['re-password'] = "You must write the password again!";
    }
    if ($_POST['password'] != $_POST['re-password']){
        $errors['password'] = "Password doesn't match!";
    }

    if (array_filter($errors)){
        echo htmlentities("There is some error!");
    }else {
        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $email = mysqli_real_escape_string($connect,$_POST['email']);
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "
    INSERT INTO `members`(`username`, `email`, `password`) 
    VALUES ('$username','$email','$password')";

        if (mysqli_query($connect, $sql)) {
            $show = htmlspecialchars("show");
            $hide_form = htmlspecialchars('hide');
        } else {
            echo htmlspecialchars("Error with the connections") . mysqli_error($connect);
            $show = htmlspecialchars('show_error');
        }
    }

}