<?php
    $id = $_GET['id'];
    
    include("banco_de_dados/conexao.php");

    $stmt = $pdo->prepare("delete from ourico where idOurico='$id'");	
	$stmt ->execute();

    header("location:crud.php");
?>