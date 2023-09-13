<?php
    //sqldetails
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hpclicks';
    //connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //data getting
    $n = $_POST['name'];
    $e = $_POST['email'];
    $s = $_POST['sub'];
    $m = $_POST['msg'];
    //inserting data
    $sql = "INSERT INTO `details`(`name`, `email`, `subject`, `message`) VALUES ('$n', '$e', '$s', '$m')";
    if (mysqli_query($conn, $sql)) {
        header("Location: contact.php?result=1");
    } else {
        header("Location: contact.php?result=-1");
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


