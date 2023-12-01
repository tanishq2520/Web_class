<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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

        form {
            display: grid;
            gap: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-bottom: 10px;
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

        .search-box {
            display: flex;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px;
        }

        .search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px 0 0 5px;
        }

        .search-button {
            padding: 10px;
            border: 1px solid #333;
            border-radius: 0 5px 5px 0;
            background-color: #333;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Add Product</h1>
    </header>

    <section>
        <form action="" method="post">
            <label for="category">Select Category:</label>
            <select id="category" name="category">
                <option value="clothing">Clothing</option>
                <option value="electronics">Electronics</option>
                <option value="books">Books</option>
                <!-- Add more options as needed -->
            </select>

            <label for="newVariant">Add New Variant:</label>
            <input type="text" id="newVariant" name="newVariant" placeholder="Enter new variant">

            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" placeholder="Enter product name">

            <label for="sdfPrice">SDF Price:</label>
            <input type="number" id="sdfPrice" name="sdfPrice" placeholder="Enter SDF price">

            <label for="productWeight">Product Weight:</label>
            <input type="number" id="productWeight" name="productWeight" placeholder="Enter product weight">

            <label for="mrpPrice">MRP Price:</label>
            <input type="number" id="mrpPrice" name="mrpPrice" placeholder="Enter MRP price">

            <label for="hsnCode">HSN Code:</label>
            <input type="text" id="hsnCode" name="hsnCode" placeholder="Enter HSN code">

            <label for="size">Size of Product:</label>
            <input type="text" id="size" name="size" placeholder="Enter size of product">

            <label for="gst">GST:</label>
            <input type="number" id="gst" name="gst" placeholder="Enter GST">

            <label for="frontImage">Front Image:</label>
            <input type="file" id="frontImage" name="frontImage" accept="image/*">

            <label for="backImage">Back Image:</label>
            <input type="file" id="backImage" name="backImage" accept="image/*">

            <button type="submit">Add Product</button>
            <button type="reset">Clear</button>
        </form>

        <h2>Search Products</h2>
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Search by product name">
            <button class="search-button">Search</button>
        </div>
    </section>
</body>

</html>

