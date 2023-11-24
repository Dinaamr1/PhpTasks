<?php
$names= ["fisrt","php","second","html"];
$subject= "PHP";
$servername = "localhost";
$username = "dina";
$password = "dina123456";

try {
  $conn = new PDO("mysql:host=$servername;dbname=first db", $username, $password);

  echo "Connected successfully";
} catch(PDOException) {
  echo "Connection failed";
}