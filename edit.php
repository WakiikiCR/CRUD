<?php
include "db.php";

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $age   = $_POST['age'];

    $conn->query("UPDATE students 
                  SET name='$name', email='$email', age='$age'
                  WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $data['name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>
    Age: <input type="number" name="age" value="<?= $data['age'] ?>"><br><br>
    <button name="update">Update</button>
</form>

<a href="index.php">Back</a>

</body>
</html>
