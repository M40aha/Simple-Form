<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maha";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<div class='error'>❌ Connection failed: " . $conn->connect_error . "</div>");
}

$message = "";

if (!empty($_POST['name']) && !empty($_POST['age'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $age = (int)$_POST['age'];

    $sql = "INSERT INTO maha (NAME, AGE) VALUES ('$name', '$age')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $message = "
            <div class='success'>
                ✅ New record created successfully! <br><br>
                <strong>ID:</strong> $last_id <br>
                <strong>Name:</strong> $name <br>
                <strong>Age:</strong> $age
            </div>";
    } else {
        $message = "<div class='error'>❌ Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
} else {
    $message = "<div class='error'>❌ Please provide both name and age.</div>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert Result</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #FFDEE9, #B5FFFC);
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
    text-align: center;
}

.success {
    color: green;
    font-size: 18px;
}

.error {
    color: red;
    font-size: 18px;
}
</style>
</head>
<body>

<div class="container">
<?php echo $message; ?>
</div>

</body>
</html>
