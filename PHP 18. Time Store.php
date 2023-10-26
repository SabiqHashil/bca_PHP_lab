<!--
    18 - Aim:
    PHP program to store current date-time in a cookie and display the Last visited
    date-time on the web page upon revisiting the same web page.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Last Visited Time</title>
</head>
<body>
    <h1>Welcome to the Web Page</h1>

    <?php
    // Function to set a cookie with the current date-time
    function setLastVisitedCookie() {
        $currentDateTime = date('Y-m-d H:i:s'); // Format the date-time
        setcookie('last_visited', $currentDateTime, time() + 3600 * 24 * 30); // Set the cookie for 30 days
    }

    // Check if the cookie exists
    if (isset($_COOKIE['last_visited'])) {
        $lastVisited = $_COOKIE['last_visited'];
    } else {
        // If the cookie doesn't exist, set a new one
        setLastVisitedCookie();
        $lastVisited = "This is your first visit.";
    }

    // Display the last visited date-time
    echo "Last Visited: " . $lastVisited;
    ?>
</body>
</html>
