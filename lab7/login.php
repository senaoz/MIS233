<?php
session_start();
if(isset($_POST["submit"])){
    if($_POST["securityCode"]==$_SESSION['captcha'])
    {
        $message="ok you gave true captcha string";
        //instead of giving message you can check login user and password here and if user and pass is true
        //you can use header location to pass the user true index page
    }else{
        $message="your captcha is wrong";
    }
}else{
    $message="please write your captcha below";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>CAPTCHA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h2>MIS233-LAB7 Building captcha</h2>
<form name="form" action="login.php" method="post">
    <p>
        <?php
            echo $message;
        ?>
    </p>
    <br>
    <img src="get_captcha.php?rand=<?php echo rand(); ?>" id="captcha">
    <br>
    <input type="text" name="securityCode" placeholder="your security code here">
    <br>
    <p>If you cant see image please <a href="#" id="reloadCaptcha">CLICK</a> to refresh</p>
    <br>
    <input type="submit" name="submit" value="SEND">
</form>
<script>
    $(document).ready(function (){
        $("#reloadCaptcha").click(function (){
            var randomvalue = Math.random()*1000;
            $("#captcha").attr('src','get_captcha.php?rand='+randomvalue);
        });
    });
</script>
</body>
</html>
