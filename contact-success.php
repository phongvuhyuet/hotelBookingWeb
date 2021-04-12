<?php
    include 'backendPHP/validateFormContact.php';
    if ($checkErr == false) {
        $conn = new PDO("mysql:host=localhost;dbname=databasehotel", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $querry = "select * from customer
        where name = '". $name ."' and email = '". $email ."' and phoneNumber = '". $phone ."';";
        $stmt1 = $conn->prepare($querry);
        $stmt1->execute();
        $result = $stmt1->fetch();
        if ($result == false) {
            $querry = "INSERT INTO customer (name, phoneNumber, email)
            VALUES ('". $name ."', '". $phone ."', '". $email ."');";
            $stmt = $conn->prepare($querry);
            $stmt->execute();
        }
        $querry2;
        if ($result == false) {
            $querry2= "insert into message (messageContent, customerID)
            values('".$message."',last_insert_id());";
        } else {
            $querry2= "insert into message (messageContent, customerID)
            values('".$message."',". $result["customerID"] .");";
        }
        $stmt2 = $conn->prepare($querry2);
        $stmt2->execute();
        echo "Success";
    } 
    else {
        echo "invalid";
    }

?>