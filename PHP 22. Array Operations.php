<!--
    22 - Aim:
    Write a PHP program to create an array and store 10 names in the array. Do the following operations.
    a. Display the contents using for each statement.
    b. Display the array in a sorted order.
    c. Display the array without the diplicate elements.
    d. Remove the last elements and display.
    e. Display the array in reverse order.
    f. Search an element in the given array.
-->

<!DOCTYPE html>
<html>
    <body>
        <h2>Array Operations</h2> <br>
        <form action="" method="POST">
        <?php
        echo "<br> <input type=radio name=arr value=dis>Display Array";
        echo "<br> <input type=radio name=arr value=srt>Sort Array";
        echo "<br> <input type=radio name=arr value=usrt>Without Duplicates";
        echo "<br> <input type=radio name=arr value=pop>Delete Last";
        echo "<br> <input type=radio name=arr value=rev>Reverse Array";
        echo "<br> <input type=radio name=arr value=sear>Search Array";
        echo "<br> <br> <input type=Submit> <br>";
        $names = array("Sabiq", "Mahir", "Shibili", "Sadhique", "Asir", "Basith", "Shamil", "Sabiq", "Gokul");
        ?>
    </body>
</html>

<?php
if ($_POST) {
    $val = $_POST['arr'];
    switch ($val) {
        case "dis":
            foreach ($names as $value)
                echo "<br>" . $value;
            break;

        case "srt":
            sort($names);
            foreach ($names as $value)
                echo "<br>" . $value;
            break;

        case "usrt":
            $uarray = array_unique($names);
            foreach ($uarray as $value)
                echo "<br>" . $value;
            break;

        case "pop":
            array_pop($names);
            foreach ($names as $value)
                echo "<br>" . $value;
            break;

        case "rev":
            $revarr = array_reverse($names);
            foreach ($revarr as $value)
                echo "<br>" . $value;
            break;

        case "sear":
            echo "<br>" . array_search("Asir", $names, true);
            break;
    }
}
?>