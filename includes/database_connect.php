<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "pglife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

// $server="sql205.infinityfree.com";
// $username="if0_36182776";
// $password="hqZrcfHLZkME1s";
// $dbname="if0_36182776_PGlife";

// $conn=mysqli_connect($server,$username,$password,$dbname);

// if(!$conn){
//     die("Connection Failed:".mysqli_connect_error());
// }

// ?>