<?php

//$connect = mysqli_connect("localhost", "root", "", "obieshop");

try {
    $conn = new PDO("mysql:host=localhost", "root", "Obakeng");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db = "CREATE DATABASE obieshop";
    $conn->exec($db);
    // sql to create table
    $sql = "CREATE TABLE obieshop.items(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        price int,
        image varchar(255),
        quantity int,
        category varchar(255),
        PRIMARY KEY (id)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
}
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

include("insert_data.php");
?>