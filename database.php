<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'ajax';

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
        die('Connection failed');
    }

    $conn->query("CREATE DATABASE IF NOT EXISTS " . $dbName);

    mysqli_select_db($conn, $dbName);

    $conn->query("CREATE TABLE IF NOT EXISTS profile(
                    id INT(10) PRIMARY KEY AUTO_INCREMENT,
                    full_name VARCHAR(30) NOT NULL,
                    email VARCHAR(30) NOT NULL,
                    mobile_number VARCHAR(30) NOT NULL,
                    gender VARCHAR(10) NOT NULL
                )");