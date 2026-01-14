<?php
include "db.php";
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

<h2>Students</h2>

<a href="create.php">Add New</a><br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Action</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['age'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
