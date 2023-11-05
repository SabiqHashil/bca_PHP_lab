<!--
	20 - Aim:
   Create a table bank with the following fields accno, cust_name, balance,insert
   some Records. Design HTML page to accept Account Number and amount using
   TextBoxes and type of transaction (Deposit oor Withdrawal) using Radio Button.
   Write PHP program to update balance according to the transaction.
-->

<!DOCTYPE html>
<html>
<head>
  <title>Bank Transaction</title>
</head>
<body>
  <h2>Bank Transaction</h2>
  <form method="POST" action="">
	Account Number: <input type="text" name="accno" required>
	
	<br><br>

	Amount: <input type="text" name="amount" required>
	
	<br><br>

	Transaction Type:
		<input type="radio" name="transaction" value="deposit" required> Deposit
		<input type="radio" name="transaction" value="withdrawal"> Withdrawal 
		
	<br><br>

	<input type="submit" value="Submit">
	
	<br><br>
	
  </form>
</body>
</html>

<?php
if ($_POST) {
	$accno = $_POST['accno'];
	$amount = $_POST['amount'];
	$transaction = $_POST['transaction'];

	$con = mysqli_connect('localhost', 'sabiq', '123', 'college');

	if ($con) {
		echo "Successfully connected!";

		if ($transaction == 'deposit') {
			$qry = "UPDATE bank SET balance = balance + '$amount' WHERE accno = '$accno'";
		} else {
			$qry = "UPDATE bank SET balance = balance - '$amount' WHERE accno = '$accno'";
		}

		$result = mysqli_query($con, $qry);

		echo " Transaction completed successfully.";

		$qry1 = "select * from bank";
		$result1 = mysqli_query($con, $qry1);

		echo "<table border=1>";
		echo "<tr><th>Account Number</th><th>Customer Name</th><th>Balance</th></tr>";
		while ($row = mysqli_fetch_row($result1)) {
			echo "<br>\n";
			echo "<tr><td> $row[0] </td><td> $row[1] </td><td> $row[2] </td></tr>";
		}
	}
}
?>