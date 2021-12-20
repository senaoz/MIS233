<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            float: right;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-weight: bold;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(255, 255, 255);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            border-radius: 10px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="courses.php">Courses</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">User Menu</a>
        <div class="dropdown-content">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="userindex.php">My Page</a>
            <a href="#">Logout</a>
        </div>
    </li>
</ul>
</body>



