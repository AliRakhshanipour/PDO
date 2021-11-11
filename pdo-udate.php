<?php
include_once "pdo-conn.php";
$sql = "UPDATE users SET isSingle = 0";
$stmt = $db->prepare($sql);
$stmt->execute();
