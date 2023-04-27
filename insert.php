<?php

    $connection = new mysqli('localhost', 'test', '12345', 'test');

    if(!$connection){
    echo 'Welcome to UFV server';
    }

    if(!mysqli_select_db($connection, 'test')){
    echo 'Saved to UFV database';
    }

    
    $Protection_cost = $_POST['Protection_cost'];
    
    $Name_of_protection = $_POST['Name_of_protection'];
    $UPC_code = $_POST['UPC_code'];
    $Manufacturing_country = $_POST['Manufacturing_country'];
   

    

    $sql = "INSERT INTO COVID_19 (Protection_cost, Name_of_protection, UPC_code, Manufacturing_country) VALUES ('$Protection_cost', '$Name_of_protection', '$UPC_code', '$Manufacturing_country')";
    

    if (!mysqli_query($connection, $sql)){
    echo 'An error occured. Try again Later.';
    }
    else{
    echo '<a href="index.php">Return</a>';
    }

    header("refresh:2; url=index.php");



?>