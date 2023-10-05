<!--
    14 - Aim:
    Write a PHP program to check whether a given number is perfect, abundant or deficient.
-->

<html>

<head>
    <title>Check Perfect, Abundant & Deficient</title>
</head>

<body>

    <h2>Enter the number to check if it's perfect, abundant or deficient:</h2>

    <form action="" method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>
</body>

</html>

<?php
if ($_POST) {
    $no = $_POST['number'];
    $sum = 0;

    for ($i = 1; $i < $no; $i++) {
        if ($no % $i == 0)
            $sum = $sum + $i;
    }

    if ($sum == $no)
        echo "Perfect Number";
    else if ($sum > $no)
        echo "Abundant Number";
    else
        echo "Deficient Number";
}
?>