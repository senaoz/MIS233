<html>
<head>
    <title>Create New Course</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding: 5% 8%;">
<?php include("menu.php"); include("settings.php");

$u_mail = $_SESSION["u_mail"];

if ($_SESSION['role'] == 'Admin') {
    $m = "Only administrators can create new courses to the system with this page. Please fill out the form for each new course.";
    echo "<script type='text/javascript'>alert('$m');</script>";
}
else {
    header("Location: index.php"); } ?>

<?php
if (isset($_POST["submit"])) {
    $ID = $_POST["ID"];
    $c_name = $_POST["c_name"];
    $c_description = $_POST["c_description"];
    $c_quota = $_POST["c_quota"];
    $c_final_date = $_POST["c_final_date"];
    $c_credits = $_POST["c_credits"];
    $c_consent = $_POST["c_consent"];
    $c_professor = $_POST["c_professor"];

    $db = new mysqli("localhost", "root", "", "MIS 233");
    $query = "INSERT INTO `courses` (`ID`, `c_name`, `c_description`, `c_quota`, `c_final_date`, `c_credits`, `c_consent`, `c_professor`) VALUES ('$ID', '$c_name', '$c_description', '$c_quota', '$c_final_date', '$c_credits', '$c_consent', '$c_professor')";
    $result = $db -> query($query);
    if ($result) {
        $message = "<br><br>Course is created.";
    } else {
        $message = "<br><br>Something wrong. Please try again.";
    }
} ?>

<div>
    <form action="createCourses.php" method="post">
        <span class="gradientText">Create New Course</span>
        <label>Course ID</label>
        <input type="text" name="ID" required>
        <label>Course Name</label>
        <input type="text" name="c_name" required>
        <label>Course Description</label>
        <input type="text" name="c_description">
        <label>Quota</label>
        <input type="number" name="c_quota" required>
        <label>Final Date</label>
        <input type="date" name="c_final_date">
        <label>Credits</label>
        <input type="number" name="c_credits">
        <label>Consent (*Please just write "YES" or "NO".)</label>
        <input type="text" name="c_consent" maxlength="3">
        <label>Course Professor</label>
        <select name="c_professor">
        <?php include("db.php");
        $query="SELECT * FROM `users` WHERE `role`='Professor'";
        $professors = $db -> query($query);

        while($row = $professors->fetch_row()) {
            $name = $row[1];
            $surname = $row[2];
            ?> <option id='<?php echo $name." ".$surname;  ?>'><?php echo $name." ".$surname;  ?></option><?php } ?>
        <input type="submit" name="submit" value="CREATE">
            <p align="center"><?php if(isset($message)) { echo $message; } ?></p>
    </form>
</div>
<?php include 'footer.php';?>
</body>
</html>