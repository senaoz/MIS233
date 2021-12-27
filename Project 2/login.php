<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding: 50px 100px">
<?php include("menu.php");
// Eğer giriş yapmış ise uyarı veriyor.
if (isset($_SESSION["u_mail"])){
    $m = "You have already logged in.";
    echo "<script type='text/javascript'>alert('$m');</script>";
}
?>
<?php
if(isset($_POST["submit"])) {
    $u_mail = $_POST["u_mail"];
    $u_password = $_POST["u_password"];
    include("db.php");
    $query = "SELECT * FROM `users` WHERE `u_mail`=`$u_mail` and `u_password`=`$u_password`";
    $result = $db -> query($query);

    if ($result->num_rows == 0) {
        $message = "Your e-mail or password is wrong.";
    } else {
        $_SESSION["u_mail"] = $u_mail;
        $row = $result->fetch_row();
        $_SESSION["u_name"] = $row[1];
        $_SESSION["u_uni"] = $row[6];
        $_SESSION["u_password"] = $row[7];
        $_SESSION["role"] = $row[8];
        header("Location: userindex.php");
    }
}
?>
<div>
    <form action="login.php" method="post">
        <span class="gradientText">Welcome Back!</span>
        <label>Email</label>
        <input type="email" name="u_mail">
        <label>Password</label>
        <input type="password" name="u_password">
        <input type="submit" name="submit">
        <p align="center"><?php if(isset($message)) { echo $message; } ?></p>
    </form>
</div>
<?php include 'footer.php';?>
</body>
</html>