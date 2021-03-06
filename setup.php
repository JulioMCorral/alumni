<?php

require 'config/initialize.php';

createTable('user',
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) UNIQUE NOT NULL,
            name VARCHAR(255),
            password VARCHAR(60) NOT NULL',
            $connection);

createTable('post',
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            author INT(10) NOT NULL,
            message VARCHAR(140) NOT NULL,
            visible TINYINT(1) NOT NULL',
            $connection);

createTable('following',
            'follower INT(10) NOT NULL,
            follows INT(10) NOT NULL,
            approved TINYINT(1) NOT NULL',
            $connection);
?>
