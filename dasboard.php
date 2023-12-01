<?php

    
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            flex-direction: column;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            background-color: #ffffff;
            border-bottom: 2px dashed black;
            padding: 10px;
        }

        .navbar h1 {
            color: limegreen; /* Color Effect */
            margin: 0;
            border-bottom: 2px solid limegreen; /* Color Effect */
            font-size: 20px; /* Text Size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Shadow Effect */
        }

        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-right: 10px;
            font-weight: 700;
        }

        .nav-links a {
            color: black;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; /* Transition for both color and background */
            font-size: 16px; /* Text Size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Shadow Effect */
        }

        .nav-links a:hover {
            background-color: #f0f0f0;
            color: blue;
        }

        .nav-links a.active {
            background-color: lightblue; /* Background color for the active item */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Box shadow for the active item */
        }

        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .nav-links {
                margin-top: 10px;
            }

            .nav-links li {
                margin-right: 0;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Php Project</h1>
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="category_manage.php">Category_Manage</a></li>
            <li><a href="role.php">Role</a></li>
            <li><a href="role_manage.php">Role_Manage</a></li>
        </ul>
    </div>
</body>
</html>
