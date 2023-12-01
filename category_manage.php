
<?php       




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category</title>
    <style>
        form {
            margin: auto;
            margin-top: 50px;
            width: 80%; /* Adjusted for responsiveness */
            max-width: 500px;
            padding: 30px;
            background-color: #90ee90; /* Light green background color */
            border: 10px solid black; /* Solid black border with a size of 10 */
            border-radius: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        input[type="checkbox"] {
            width: 13px;
            height: 13px;
            margin: 0;
        }

        button {
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Add transition effect */
        }

        button[type="reset"] {
            background-color: #ff6961; /* Light red */
        }

        button[type="reset"]:hover {
            background-color: #ff4741; /* Darker red on hover */
        }

        button[type="submit"] {
            background-color: #90ee90; /* Light green */
        }

        button[type="submit"]:hover {
            background-color: #7ace7a; /* Darker green on hover */
        }

        @media screen and (max-width: 600px) {
            form {
                width: 100%; /* Full width on smaller screens */
            }
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Category Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
        <label for="image">Image</label><br>
        <input type="file" name="image" id="image">
        <label for="status">Status</label>
        <input type="checkbox" name="status">
        <div class="buttons">
            <button type="reset">CANCEL</button>
            <button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html>
