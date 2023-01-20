<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
<?php
include "..\db.php";

$query = "SELECT * FROM games";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Games</h1>";
    echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["GameName"] . "</td>";
        echo "<td>" . $row["GameTag"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No games found.";
}

mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>