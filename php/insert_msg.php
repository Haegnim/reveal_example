<?php

    include_once "connect.php";

    $name = mysqli_real_escape_string($db_conn, $_POST['name']);
    $email = mysqli_real_escape_string($db_conn, $_POST['email']);
    $subject = mysqli_real_escape_string($db_conn, $_POST['subject']);
    $message = mysqli_real_escape_string($db_conn, $_POST['message']);
 
    echo $name, $email, $subject, $message;

?>