<?php
?>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!isset($_POST["submit"]))
?>

<form method="post" action="index.php">
    <fieldset>
        <legend>Registration Form</legend>
        <label for="name">Full Name:</label>
        <input type="text" name="name" size="30">
    </fieldset>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <input type="submit" value="Submit">
</form>

</body>
