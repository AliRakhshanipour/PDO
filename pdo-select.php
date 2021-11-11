<?php
include_once "pdo-conn.php";

$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$stmt->execute();
while ($rows = $stmt->fetch(PDO::FETCH_OBJ)) {
    myprint($rows);
}
