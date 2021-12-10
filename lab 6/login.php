<?php
if(isset($_POST["submit"]))
{
    $uname = $_POST["uname"];
    $upass = $_POST["upass"];
    $db = new mysqli("localhost", "root", "", "MIS233");
    $result = $db -> query("select * from users where uname='$uname' and upass='$upass'");
}
?>

<h1>LOGIN FORM</h1>
<form action="login.php" method="post">
User Name: <input type="text" name="uname"><br>
User Password: <input type="password" name="upass"><br>
<input type="submit" name="submit" value="SEND">
</form>