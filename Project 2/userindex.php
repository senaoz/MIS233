<html>
<head>
    <title>My Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="banner">
    <?php include("menu.php");
    if (!isset($_SESSION["u_mail"])){
        header("Location: index.php");
    } ?>
    <h1>Hello <?php
        echo $_SESSION['u_name'];
        ?>!</h1>
    <h2 style="font-weight: normal"><b>MIS 233 </b>Lab 6</h2>
</div>
<div style="padding: 8%">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor tellus finibus lectus faucibus, eu vestibulum ex rutrum. Nam convallis laoreet mi, quis tempus sapien tincidunt tempus. Sed lectus libero, dignissim efficitur arcu sed, condimentum iaculis nulla. Sed nec augue in tortor pretium sollicitudin a eu velit. Etiam vulputate libero non purus sollicitudin, et dapibus felis aliquet. Praesent non diam ultrices, dictum ligula at, congue est. Nulla sagittis leo dui, vel aliquam est vulputate quis. Quisque malesuada tortor ipsum. Nulla in lacinia leo, vitae dapibus libero. Pellentesque mauris mauris, ornare ac sodales a, efficitur id arcu. Duis eget nulla volutpat, dapibus purus in, efficitur ligula. Nam ultricies, mauris id rutrum mollis, elit eros rutrum dolor, a mattis dui nibh eu dolor. Pellentesque eu egestas tortor. Mauris eget nibh vitae arcu lobortis dapibus. Nam at metus pretium, eleifend neque at, fermentum ex. Integer ipsum lorem, porttitor vel turpis vitae, fermentum dignissim nisi.
        </p>
    <?php include 'changePassword.php';?>
</div>
<?php include 'footer.php';?>
</body>
</html>