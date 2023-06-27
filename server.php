<?php 
        include('database.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];

        $date = date('Y', strtotime($birthdate));
        $now = date('Y');
        $age = $now - $date;

        $conn->query("
            INSERT INTO `profile`(`full_name`, `email`, `mobile_number`, `birthdate`, `age`, `gender`) VALUES ('$name','$email','$number', '$birthdate', '$age', '$gender')
        ");

        echo json_encode('Success');
    ?>