<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding: 50px 100px">
<?php include("menu.php");
// Eğer giriş yapmış ise uyarı veriyor.
if (isset($_SESSION["u_mail"])){
    $message = "You have already logged in.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<?php
if(isset($_POST["submit"])) {
    $u_mail = $_POST["u_mail"];
    $u_password = $_POST["u_password"];
    $db = new mysqli("127.0.0.1", "root", "", "MIS 233");
    $query = "select * from users where u_mail='$u_mail' and u_password='$u_password'";
    $result = $db -> query($query);
    if ($result->num_rows == 0) {
        echo "Your e-mail or password is wrong.";
    } else {
        $_SESSION["u_mail"] = $u_mail;
        $row = $result->fetch_row();
        $_SESSION["u_name"] = $row[2];
        $_SESSION['role'] = $row[9];
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
    </form>
</div>
<?php include 'footer.php';?>
</body>
</html>