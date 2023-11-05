<!--
    19 - Aim:
    Create a table product with fields itemcode, itemname, unitprice, Write PHP
    program to insert 5 records into the table and display it in a table format.
-->
<html>
    <head>
        <title>Product</title>
    </head>

    <body>
        <h1><center>List of Products</center></h1>
        <form method="POST" action="">
            Item Code: <input type="text" name="code">
            <br> <br> <br>
            Item Name: <input type="text" name="name">
            <br> <br> <br>
            Unit Price: <input type="text" name="price">
            <br> <br> <br>
            <input type="submit" value="Display">
        </form>
    </body>
</html>

<?php

if ($_POST) {
    $no = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $con = mysqli_connect('localhost', 'sabiq', '123', 'college');
    if ($con) {
        echo "Successfully connected!";
        $qry = "insert into product values ('$no', '$name', '$price')";
        $result = mysqli_query($con, $qry);
        $qry1 = "select * from product";
        $result1 = mysqli_query($con, $qry1);
        echo "<table border=1>";
        echo "<tr><th>Item Code</th><th>Item Name</th><th>Unit Price</th></tr>";
        while ($row = mysqli_fetch_row($result1)) {
            echo "<br>\n";
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
        }
    }
}

?>