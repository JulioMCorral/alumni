<?php

require 'config/initialize.php';

createTable('alumni',
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) UNIQUE NOT NULL,
            name VARCHAR(255),
            password VARCHAR(60) NOT NULL',
            $connection);
?>
