
<?php
$servername = "localhost:3306";
$username = "campktmm_soorya";
$password = "$00rya@db";

$dbname = "campktmm_keraladata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>