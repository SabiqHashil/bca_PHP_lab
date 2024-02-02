<!--
    15 - Aim:
    Create a login page using databse
-->

<html>
    <body style="text-align: center;">
        <form action="" method="POST">
            Username: <input type="text" name="usr"> <br> <br>
            Password: <input type="password" name="pass"> <br> <br> <br>
            <input type="submit" value="login">
        </form>
    </body>
</html>

<?php
if ($_POST) {
    $usr = $_POST['usr'];
    $paswd = $_POST['pass'];
    $con = mysqli_connect('localhost', 'sabiq', '123', 'college'); 
    if ($con) {
        echo "Successfully Connected.";
        $qry = "select username, password from login where username = '$usr' and password='$paswd'";
        $result = mysqli_query($con, $qry);
        $nos = mysqli_num_rows($result);

        if ($nos)
            echo " <br> $usr1, You are logged in successfully!";
        else
            echo "Login unsuccessfull!";
    }
}
?>