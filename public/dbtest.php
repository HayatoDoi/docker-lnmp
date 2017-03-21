<?php
$mysqli = new mysqli($_ENV["DATABASE_HOST"], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD'],"test");
$result = $mysqli->query("SELECT * FROM user");
$row = $result->fetch_assoc();
var_dump($row);

