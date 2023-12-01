<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #36D1DC, #5B86E5);
            overflow: hidden;
        }

        form {
            margin: auto;
            margin-top: 50px;
            max-width: 500px;
            width: 90%;
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            width: 100%;
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        button {
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
            cursor: pointer;
        }

        button[type="reset"] {
            background-color: red;
        }

        button[type="submit"] {
            background-color: green;
        }
    </style>
</head>

<body>
    <form action="">
        <label for="name">Role Name*</label>
        <input type="text" name="name" id="name" placeholder="Enter Role name">

        <div class="buttons">
            <button type="reset">CANCEL</button>
            <button type="submit">SAVE</button>
        </div>
    </form>
</body>

</html>
