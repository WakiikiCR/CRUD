<?php

$conn = new mysqli('localhost', 'root', '', 'ca227');

if ($conn->connect_error) {
    die("Connection Error!");
}

// $sql = "INSERT INTO students VALUES (105, 'Abdi Jamac', 'CA223', 'Male', '3453463456')";

// if ($conn->query($sql)) {
//     echo "Successfully Inserted!";
// } else {
//     echo "Query Error! " . $conn->error;
// }


$sql = "UPDATE students SET name = 'Mohamed Mahad' WHERE id = 105";

if ($conn->query($sql)) {
    echo "Successfully Update!";
} else {
    echo "Query Error! " . $conn->error;
}

$r = $conn->query("SELECT * FROM students WHERE id = 105");

if($r->num_rows > 0) {
$sql = "DELETE FROM students WHERE id = 105";

if ($conn->query($sql)) {
    echo "Successfully Deleted!";
} else {
    echo "Query Error! " . $conn->error;
}

} else {
    echo "105 Student not found!";
}


echo "<br>";

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if ($result) {
    
if ($result->num_rows > 0) {


while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Class: " . $row["class"] . "<br>";
    echo "Gender: " . $row["gender"] . "<br>";
    echo "Phone: " . $row["phone"] . "<br>";

    echo "<br>";
}


}
else {
    echo "No Student Data Found!";
}


}
else {
    echo "Query Error! " . $conn->error;
}




?>
