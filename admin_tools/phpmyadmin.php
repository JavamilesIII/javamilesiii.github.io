<?php
	include("../login/connection.php");
    include("../login/functions.php");
    include("../login/init.php");
    if (!check_rank(2)) {
        // Redirect to a "no access" page or show an error
        header("Location: ../login/index.php");
        exit();
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = $_POST['query'];
    if (is_null($query) || empty(trim($query))) {
        echo("<center><p>No entry</p></center>");
        exit;
    }
    // Create connection
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<center><p>Connection failed: " . $conn->connect_error . "</p></center>");
    }

    // Execute query
    $result = $conn->query($query);

    echo "<center><h2>Results:</h2></center>";

    // Check if the query execution was successful
    if ($result === false) {
        echo "<center><p>Error executing query: " . $conn->error . "</p></center>";
    } else {
        if ($result instanceof mysqli_result) {
            if ($result->num_rows > 0) {
                echo "<table id='mysql' align='center'><tr>";
                // Output column headers
                while ($field = $result->fetch_field()) {
                    echo "<th>" . htmlspecialchars($field->name) . "</th>";
                }
                echo "</tr>";
                
                // Output rows
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<center><p>No results returned.</p></center>";
                
                // Execute the fallback query
                $fallback_query = "SELECT * FROM users";
                $fallback_result = $conn->query($fallback_query);

                if ($fallback_result === false) {
                    echo "<center><p>Error executing fallback query: " . $conn->error . "</p></center>";
                } elseif ($fallback_result->num_rows > 0) {
                    // Display the fallback results
                    echo "<table id='mysql' align='center'><tr>";
                    // Output column headers
                    while ($field = $fallback_result->fetch_field()) {
                        echo "<th>" . htmlspecialchars($field->name) . "</th>";
                    }
                    echo "</tr>";
                    
                    // Output rows
                    while ($row = $fallback_result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $cell) {
                            echo "<td>" . htmlspecialchars($cell) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<center><p>No data found in the 'users' table.</p></center>";
                }
            }
        } else {
            echo "<center><p>Query executed successfully.</p></center>";
        }
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Interface</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../darkmode.js" defer></script>
</head>
<body>
    <center>
        <h2>MySQL Query Interface</h2>
        <form action="phpmyadmin.php" method="post">
            <textarea name="query" id="query" rows="10" cols="50"></textarea><br><br>
            <input type="submit" value="Execute Query">
        </form>
    </center>
</body>
</html>
