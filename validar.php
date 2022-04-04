<?php

    include("banco_de_dados/conexao.php");

    $login = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    //echo"$email $senha";

    $loginBanco = "";
    $senhaBanco = "";

    try{

        $stmt = $pdo -> prepare("select loginFunc, senhaFunc from func where loginFunc='$login' and senhaFunc='$senha'");

        $stmt -> execute();

        while($row = $stmt -> fetch(PDO::FETCH_BOTH)){

            $loginBanco = $row['loginFunc'];
            $senhaBanco = $row['senhaFunc'];

        }

    }

    catch(PDOException $e){

        echo "ERRO: " . $e ->getMessage();

    }

    if($login == $loginBanco && $senha == $senhaBanco){

        header("Location: crud.php");

    } else{

        header("Location: login.php");
        echo "<h3>Login e/ou senha estão incorreto(s)</h3>";

    }

?>