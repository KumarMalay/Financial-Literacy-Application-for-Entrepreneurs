<!-- // php -S localhost:8000 -->

<?php
   $host = 'localhost';
   $dbname = 'finhub';
   $username = 'root';
   $password = '';

   try {
       $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
       die("Connection failed: " . $e->getMessage());
   }
   ?>