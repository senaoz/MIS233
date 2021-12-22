<?php
if(isset($_POST["submit"])) {
    $u_mail = $_SESSION["u_mail"];
    $db = new mysqli("127.0.0.1", "root", "", "MIS 233");
    $query = "select * from users where u_mail='$u_mail'";
    $result = $db->query($query);
    $row = $result->fetch_row();
    if ($_POST["currentPassword"] == $row[8] && ($_POST["newPassword"] == $_POST["confirmPassword"])) {
        $sql = "UPDATE users SET u_password='".$_POST["newPassword"]."' WHERE u_mail='".$u_mail."'";
        if ($db->query($sql) === TRUE) echo "Password Changed Sucessfully";
        else echo "Error while updating the password.";
    }
}
?>

<html>
<head>
    <title>Change Password</title>
</head>
<body>
<form method="post">
    <h3 align="center">You can update your password with this form.</h3>
    <div><?php if(isset($message)) { echo $message; } ?></div>
    <label>Current Password:</label>
    <input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
    <label>New Password:</label>
    <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
    <label>Confirm Password:</label>
    <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
    <input type="submit">
</form>
</body>
</html>
