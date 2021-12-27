<?php
if(isset($_POST["submit"])){
    $u_mail = $_SESSION["u_mail"];
    $newPassword = $_POST["newPassword"];
    $currentPassword = $_POST["currentPassword"];
    $confirmPassword = $_POST["confirmPassword"];
    include("db.php");

    if ($currentPassword == $_SESSION["u_password"]) {
        if ($confirmPassword == $newPassword){
            $sql = "UPDATE `users` SET `u_password`=`$newPassword` WHERE `u_mail`=`$u_mail`";
            $result = $db->query($sql);
            if ($result) $message = "Passwords updated.";
            else $message = "Error while updating the password.";
        }
        else $message = "Current password is not true.";
    }
    else $message = "Current password is not true.";
}
?>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
<form method="post">
    <h3 align="center">You can update your password with this form.</h3>
    <label>Current Password:</label>
    <input type="password" name="currentPassword" required>
    <label>New Password:</label>
    <input type="password" name="newPassword" minlength="<?php $MinPwd?>" maxlength="<?php $MaxPwd?>" required>
    <label>Confirm Password:</label>
    <input type="password" name="confirmPassword" minlength="<?php $MinPwd?>" maxlength="<?php $MaxPwd?>" required>
    <input type="submit" name="submit">
    <p align="center"><?php if(isset($message)) { echo $message; } ?></p>
</form>
</body>
</html>
