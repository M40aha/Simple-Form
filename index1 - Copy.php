<<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert Name & Age</title>
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

form {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
    width: 300px;
    text-align: center;
}

h2 {
    color: #444;
}

label {
    display: block;
    text-align: left;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<form action="MMH.php" method="post">
  <h2>Enter Name and Age</h2>

  <label>Name:</label>
  <input type="text" name="name" required>

  <label>Age:</label>
  <input type="number" name="age" required>

  <input type="submit" value="Save">
</form>

</body>
</html>

