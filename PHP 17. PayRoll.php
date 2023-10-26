<!--
    17 - Aim:
    Write a PHP application to generate the pay slip of an employee by accepting name, basic salary and designation. The new salary will be calculated based on the following conditions.
    eg: (figure in questions photo)
-->

<html>
    <head>
        <title>Payroll Page</title>
    </head>

    <body style="text-align: center;">
        <form method="POST">
            <table border="0">
                <tr>
                    <td>Employee Name</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Designation</td>
                    <td><select name="desig">
                            <option>(Please Select)</option>
                            <option>Manager</option>
                            <option>Supervisor</option>
                            <option>Clerk</option>
                            <option>Peon</option>
                        </select></td>
                    </tr>

                <tr>
                    <td>Basic Salary</td>
                    <td><input type="text" name="salary"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if ($_POST) {
    $ename = $_POST["name"];
    $designation = $_POST["desig"];
    $basic = $_POST["salary"];

    if (is_numeric($basic)) {
        if ($basic != NULL) {
            switch ($designation) {
                case "Manager":
                    $hra = ($basic * 25) / 100;
                    $conv = 1000;
                    $extra = 500;
                    $gross = $hra + $conv + $extra + $basic;
                    if ($gross <= 2000)
                        $intax = $gross;
                    elseif ($gross > 2000 && $gross < 4000)
                        $intax = ($gross * 3) / 100;
                    elseif ($gross > 4000 && $gross < 5000)
                        $intax = ($gross * 5) / 100;
                    elseif ($gross > 5000)
                        $intax = ($gross * 8) / 100;
                    $net = $gross - $intax;
                    echo "<b>Employee Name: </b>$ename<br>";
                    echo "<b>Designation: </b>$designation<br>";
                    echo "<b>Salary: </b>$net<br>";
                    break;

                case "Supervisor":
                    $hra = ($basic * 25) / 100;
                    $conv = 750;
                    $extra = 200;
                    $gross = $hra + $conv + $extra + $basic;
                    if ($gross <= 2000)
                        $intax = $gross;
                    elseif ($gross > 2000 && $gross < 4000)
                        $intax = ($gross * 3) / 100;
                    elseif ($gross > 4000 && $gross < 5000)
                        $intax = ($gross * 5) / 100;
                    elseif ($gross > 5000)
                        $intax = ($gross * 8) / 100;
                    $net = $gross - $intax;
                    echo "<b>Employee Name: </b>$ename<br>";
                    echo "<b>Designation: </b>$designation<br>";
                    echo "<b>Salary: </b>$net<br>";
                    break;

                case "Clerk":
                    $hra = ($basic * 25) / 100;
                    $conv = 500;
                    $extra = 100;
                    $gross = $hra + $conv + $extra + $basic;
                    if ($gross <= 2000)
                        $intax = $gross;
                    elseif ($gross > 2000 && $gross < 4000)
                        $intax = ($gross * 3) / 100;
                    elseif ($gross > 4000 && $gross < 5000)
                        $intax = ($gross * 5) / 100;
                    elseif ($gross > 5000)
                        $intax = ($gross * 8) / 100;
                    $net = $gross - $intax;
                    echo "<b>Employee Name: </b>$ename<br>";
                    echo "<b>Designation: </b>$designation<br>";
                    echo "<b>Salary: </b>$net<br>";
                    break;

                case "Peon":
                    $hra = ($basic * 25) / 100;
                    $conv = 250;
                    $extra = 0;
                    $gross = $hra + $conv + $extra + $basic;
                    if ($gross <= 2000)
                        $intax = $gross;
                    elseif ($gross > 2000 && $gross < 4000)
                        $intax = ($gross * 3) / 100;
                    elseif ($gross > 4000 && $gross < 5000)
                        $intax = ($gross * 5) / 100;
                    elseif ($gross > 5000)
                        $intax = ($gross * 8) / 100;
                    $net = $gross - $intax;
                    echo "<b>Employee Name: </b>$ename<br>";
                    echo "<b>Designation: </b>$designation<br>";
                    echo "<b>Salary: </b>$net<br>";
                    break;

                default:
                    echo ("Invalid Designation! Try again...");
            }
        }
    }
}
?>