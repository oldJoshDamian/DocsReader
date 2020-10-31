<?php

/**
 * This is an example of connecting to a mysql database using PDO
 * 
 * Replace variable values with yours 
 * 
 * Include this file in a script that requires databse access and call the $pdo variable
 *
 * Example usage: 
 * require_once(path/to/database_conn.php);
 * 
 * $email = "victor@gmail.com";
 * 
 * $sql = "SELECT * FROM users WHERE email = :email";
 * 
 * $query = $pdo->prepare($sql);
 * 
 * $query->execute(['email' => $email]);
 * 
 * $result = $query->fetch();
 **/
 
 /** the name of your database **/
 $database_name = "videoblog"; 
 
 /** your username for accessing phpmyadmin **/
 $database_username = "root";
 
 /** your password for accessing phpmyadmin **/
 $database_password = "zedainee";
 
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname={$database_name};", 
        $database_username, 
        $database_password
    );
    echo 'connected';
} catch (PDOException $error) {
    exit('Database error: ' . $error->getMessage());
}

 