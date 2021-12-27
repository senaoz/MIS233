<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding: 5% 8%;">
<?php include("menu.php"); ?>
<br><br><br>
<h2 class="gradientText">Users</h2>
<table id="tables">
    <thead >
    <tr>
        <th>User E-mail</th>
        <th>User Name</th>
        <th>User Surname</th>
        <th>User Phone</th>
        <th>User University</th>
        <th>User Password</th>
        <th>User Role</th>
        <th></th>
    </tr>
    </thead>

    <?php include("db.php");
    $query="select * from users";
    $users = $db -> query($query);

    while($row = $users->fetch_row()) {
        $u_mail = $row[0];
        $u_name = $row[1];
        $u_surname = $row[2];
        $u_phone = $row[3];
        $u_uni = $row[6];
        $u_password = $row[7];
        $role = $row[8];
        ?>
        <tr>
            <td><?php echo $u_mail;  ?></td>
            <td><?php echo $u_name;  ?></td>
            <td><?php echo $u_surname;  ?></td>
            <td><?php echo $u_phone;  ?></td>
            <td><?php echo $u_uni;  ?></td>
            <td><?php echo $u_password;  ?></td>
            <td><?php echo $role;  ?></td>
            <td><a id="edit" href="edit.php?del=<?php echo $u_mail ?>">Delete</a></td>
        </tr> <?php
    } ?>
</table>
<br><br><br>
<h2 class="gradientText">Courses</h2>
<table id="tables">
    <thead >
    <tr>
        <th>ID</th>
        <th>Course Name</th>
        <th>Course Description</th>
        <th>Course Quota</th>
        <th>Course Final Date</th>
        <th>Credits</th>
        <th>Consent</th>
        <th>Course Professor</th>
    </tr>
    </thead>

    <?php include("db.php");
    $query="SELECT * FROM courses";
    $courses = $db -> query($query);

    while($rowC = $courses->fetch_row()) {
        $c_id = $rowC[0];
        $c_name = $rowC[1];
        $c_description = $rowC[2];
        $c_quota = $rowC[3];
        $c_final_date = $rowC[4];
        $c_credits = $rowC[5];
        $c_consent = $rowC[6];
        $c_professor = $rowC[7];
        ?>
        <tr>
            <td><?php echo $c_id;  ?></td>
            <td><?php echo $c_name;  ?></td>
            <td><a id="edit" onclick="alert('<?php echo $c_description ?>')">Click to see</a></td>
            <td><?php echo $c_quota;  ?></td>
            <td><?php echo $c_final_date;  ?></td>
            <td><?php echo $c_credits;  ?></td>
            <td><?php echo $c_consent;  ?></td>
            <td><?php echo $c_professor;  ?></td>
        </tr> <?php
    } ?>
</table>
</body>

</html>