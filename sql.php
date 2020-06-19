<?php
//ここでデータベースを読み込んでいく
$pdo=new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');
$sql='SELECT * FROM dbPractice';
$statement=$pdo->prepare($sql);
$statement->execute();
$results=[];
while($row=$statement->fetch(PDO::FETCH_ASSOC)){
    $results[]=$row;
}
$statement=null;
$pdo=null;
require_once 'view/sql.tpl.php';
?>