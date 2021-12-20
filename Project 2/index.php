<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="banner">
    <?php include("menu.php"); ?>
    <h1>MIS 233<br>Home</h1>
    <h2 style="font-weight: normal"><b>Sena Öz </b>2019502156</h2>
</div>
<section>
    <?php
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
        echo '<script type="text/javascript"> showDiv() </script>';
    }
    ?>

    <div class="box" id="box1">
        <a href="login.php"><span>Login</span></a>
    </div>
    <div class="box" id="box2">
        <a href="register.php"><span>Register</span></a>
    </div>
</section>
<?php include 'footer.php';?>
</body>
</html>
