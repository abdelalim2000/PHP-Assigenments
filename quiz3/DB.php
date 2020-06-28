<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "school";

$conn = new mysqli($hostName, $userName, $password, $dbName);

if (isset($conn)) {
    echo "Connection succesfully with {$dbName} database <br>";
} else {
    echo "Connection error" . $conn->connect_error;
}

$sqlCreateTable = "CREATE TABLE students (
    gender TEXT(7) NOT NULL, birstdate DATE NOT NULL
)";

/* if ($conn->query($sqlCreateTable)) {
    echo "Table Created Succefully <br>";
} else {
    echo "Connection error" . $conn->connect_error;
} */

$sqlInsertData = "INSERT INTO `students` (`gender`, `birstdate`) VALUES ('female', '1997/05/20')";

if ($conn->query($sqlInsertData)) {
    echo "record created succefully <br>";
} else {
    echo "Connection Error" . $conn->connect_error;
}
