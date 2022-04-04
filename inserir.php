<?php

    $id = $_POST['txIdOurico'];
    $nome = $_POST['txNome'];
    $desc = $_POST['txDesc'];
    $idade = $_POST['txIdade'];
    $peso = $_POST['txPeso'];
    $altura = $_POST['txAltura']; 
    $perso = $_POST['txPerso']; 
    $nacio = $_POST['txNacio']; 
    $dieta = $_POST['txDieta']; 
    $poli = $_POST['txPoli']; 
    $reli = $_POST['txReli']; 
    

    //echo "$produto $idCategoria $valor";

    include("banco_de_dados/conexao.php");
    if($idProduto>0){
        $stmt = $pdo->prepare("update ourico set 
                            nome ='$nome'
                            ,DescOurico = '$desc'
                            ,idade='$idade',
                            peso = '$peso',
                            altura = 'altura',
                            personalidade = '$perso'
                            nacionalidade = '$nacio',
                            dieta = '$dieta',
                            posicao_politica = '$poli'
                            religiao 
                            where idOurico='$idProduto'");	
    }
    else{
        $stmt = $pdo->prepare("insert into ourico values(null,'$nome','$desc','$idade', '$peso', '$altura', '$perso', '$nacio', '$dieta', '$poli', '$reli', img/ouricos/ouri7.jpg);");
    }
    
	$stmt ->execute();

    header("location:crud.php");

?>