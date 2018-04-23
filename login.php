<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 1:07 PM
 */

include('dbutil/dbconnection.php');
include('model/User.php');
include('daoimpl/LoginDaoImpl.php');
include('uiutil/UIUtil.php');

if (isset($_POST['btn_login'])) {
    $loginDaoImpl = new LoginDaoImpl($pdo);
    $user = new User();
    $user->setUsername($_POST['uname']);
    $user->setPassword($_POST['psw']);

    $isValid = $loginDaoImpl->isValid($user);
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/loginstyle.css"/>
    <title></title>
</head>
<body>
<form action="" method="post">
    <div class="imgcontainer">
        <img src="assets/default-user-avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <?php if (isset($_POST['uname']) && isset($_POST['psw'])) : ?>
            <?php if($isValid === 1) : ?>
                <?php
                    $uiUtil = new UIUtil();
                    $uiUtil->redirect("view/dashboard.php");
                ?>
            <?php else : ?>
                <p class="invalid-login">Invalid Login. Please try again.</p>
            <?php endif;?>
        <?php endif; ?>

        <button type="submit" name="btn_login">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <br/>


</form>
</body>
</html>