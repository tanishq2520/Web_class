<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        header {
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        section {
            margin: auto;
            margin-top: 20px;
            max-width: 800px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            margin: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: green;
            color: white;
        }

        button[type="reset"] {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <h1>Role Page</h1>
    </header>

    <section>
        <h2>Role Entries</h2>

        <table>
            <thead>
                <tr>
                    <th>Role ID</th>
                    <th>Role Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample row, replace with actual data -->
                <tr>
                    <td>1</td>
                    <td>Administrator</td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2>Add New Role</h2>
        <form action="" method="post">
            <label for="newRole">Role Name:</label>
            <input type="text" id="newRole" name="newRole" placeholder="Enter new role name" required>
            <button type="submit">Add Role</button>
            <button type="reset">Clear</button>
        </form>

        <h2>Search Roles</h2>
        <label for="searchRole">Search by Role Name:</label>
        <input type="text" id="searchRole" name="searchRole" placeholder="Enter role name to search">

        <button>Search</button>
    </section>
</body>

</html>
