<?php
//koneksi ke db
$conn = mysqli_connect("localhost","root","","wad_project3");
//perikas apakah sudah terkoneksi atau belum
if (!$conn){
    die("Failed Connecting to MySQLi :".mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM students");

var_dump($result);
echo "<br/>";
var_dump(mysqli_fetch_object ($result));

//insert
//get data from form
//letakan di var
//create query
//execute


?>