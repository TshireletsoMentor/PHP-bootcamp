<?php
$servername = "localhost";
$username = "root";
$password = "Obakeng";
$dbname = "obieshop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO items(name, price, image, quantity, category)
    VALUEs ('RDR2', 200, 'https://media.gamestop.com/i/gamestop/10138091/Red-Dead-Redemption-2', '10', 'games'),
           ('FIFA', 200, 'https://i0.wp.com/metro.co.uk/wp-content/uploads/2019/07/EAaDVg7XkAIPgEj-0d2a.jpg?quality=90&strip=all&zoom=1&resize=644%2C711&ssl=1', '10', 'games'),
           ('UDAWN', 200, 'https://cdn.shopify.com/s/files/1/1288/8361/files/Until_Dawn_Icon.jpg?2107', '10', 'games'),
           ('PS4', 3500, 'https://target.scene7.com/is/image/Target/GUEST_46217070-069f-4de3-9ac3-abc3ea6cdbc5?wid=488&hei=488&fmt=pjpeg', '10', 'console'),
           ('NINTENDO', 2000, 'https://www.bigw.com.au/medias/sys_master/images/images/h82/h02/14106587955230.jpg', '10', 'console'),
           ('XBOX1', 2000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfvWQaLsowG0MiL5tQli2azJ3ZKODCa8UFHXqIzyn85RHnYCJPng', '10', 'console'),
           ('Gaming shirt', 100, 'https://www.dhresource.com/0x0/f2/albu/g8/M01/61/91/rBVaV1wx_DWAKjcGAAKRE6cCZHU809.jpg', '10', 'accessory'),
           ('Headphones', 500, 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fforbes-finds%2Ffiles%2F2018%2F11%2F8d986cc8-c02b-40b2-86eb-7c16a2d85571_1.e5f37aea12eaaac8f8cfa200eaf4ae04-e1543003049222.jpg', '10', 'accessory'),
           ('Gaming chair', 1500, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhRrx0XM6VwHvXqJxCiGo66rlcMg5JUwpuepB9RKIcDMDbszA5', '10','accessory')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>