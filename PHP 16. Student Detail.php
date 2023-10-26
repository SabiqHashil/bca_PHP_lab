<!--
    16 - Aim:
    Create a table student with fields roll no., name, mark, grade. Insert same records in the table.
    Write a PHP program to display the mark list of a student by accepting the register no. of the student.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <form method="POST">
        Reg Number: <input type="text" name="reg">
        <input type="submit" value="Get Result">
    </form>
</body>
</html>

<?php
if ($_POST) {
    $reg = $_POST['reg'];
    $con = mysqli_connect('localhost', 'student', '12345', 'college');
    if ($con) {
        echo "Successfully connected...";
        $qry = "select * from student where roll no = $reg";
        $result = mysqli_query($con, $qry);
        $nos = mysqli_num_rows($result);
        while ($row = mysqli_fetch_row($result)) {
            echo "<br>";
            echo "Roll no.: $row[0] <br> Number: $row[1] <br> Mark: $row[2] <br> Grade: $row[3]";
        }
    }
}
?>