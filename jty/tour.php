<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    text-align: center;
}

h1 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}

input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

    </style>
    <title>Tour Booking Form</title>
</head>
<body>
    <h1>Book Your Tour</h1>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="tour_type">Tour Type:</label>
        <select id="tour_type" name="tour_type">
            <option value="Adventure">Adventure</option>
            <option value="Cultural">Cultural</option>
            <option value="Nature">Nature</option>
        </select>

        <input type="submit" value="Book Now">
    </form>
</body>
</html>
