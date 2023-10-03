<!--
    12 - Aim:
    Create a PHP program to display the bio data of a person by reading the personal details using an HTML page.
-->

<html>

<head>
    <title>Bio Data</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Bio Data</h1>
        <label for="name1">Name:</label> <br>
        <input type="text" name="name1"> <br> <br>
        <label for="address1">Address:</label> <br>
        <textarea name="address1"> </textarea> <br> <br>
        <label for="age1">Age:</label> <br>
        <input type="text" name="age1"> <br> <br>
        <label for="mobile1">Mobile:</label> <br>
        <input type="text" name="mobile1"> <br> <br>
        <label for="email1">Email:</label> <br>
        <input type="text" name="email1"> <br> <br>
        <label for="qualification1">Qualification:</label> <br>
        <input type="text" name="qualification1"> <br> <br>
        <input type="submit" value="Display"> <br>
    </form>
</body>

</html>

<?php
if ($_POST) {
    echo "<h1>Bio Data</h1> ";
    echo "Name: " . $_POST["name1"] . "<br>";
    echo "Address: " . $_POST["address1"] . "<br>";
    echo "Age: " . $_POST["age1"] . "<br>";
    echo "Mobile: " . $_POST["mobile1"] . "<br>";
    echo "Email: " . $_POST["email1"] . "<br>";
    echo "Qualification: " . $_POST["qualification1"] . "<br>";
}
?>