<?php
require 'db.php';
$id = $_GET['id'];


$sql = 'DELETE FROM booking_personal WHERE user_id=:id';
$sql1 = 'DELETE FROM booking_gaurdian WHERE user_id=:id';
$sql2 = 'DELETE FROM booking_localgaurdian WHERE user_id=:id';
$sql3 = 'DELETE FROM booking_educational WHERE user_id=:id';
$sql4 = 'DELETE FROM login WHERE User_Id=:id';


$statement = $connection->prepare($sql);
$statement1 = $connection->prepare($sql1);
$statement2 = $connection->prepare($sql2);
$statement3 = $connection->prepare($sql3);
$statement4 = $connection->prepare($sql4);

if ($statement->execute([':id' => $id]) && $statement1->execute([':id' => $id]) && $statement2->execute([':id' => $id]) && $statement3->execute([':id' => $id]) && $statement4->execute([':id' => $id])) {
  header("refresh:0,url=index1.php");
}