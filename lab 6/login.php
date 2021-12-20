<?php
session_start();
?>
<html>
<head>
    <title>Lab 6 - Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="center">
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
</body>
</html>