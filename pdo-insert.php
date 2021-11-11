<?php
include_once "pdo-conn.php";

// $sql = "INSERT INTO users (fullname,age) VALUES (?,?)";
// $stmt = $db->prepare($sql);
// $stmt->execute(["hassan", 59]);
// mydump($stmt);

$sql = "INSERT INTO users (fullname,age) VALUES (:fullname,:age)";
$stmt = $db->prepare($sql);
$stmt->execute(["fullname" => "hassan", "age" => 59]);
echoline("insert id : " . $db->lastInsertId());
