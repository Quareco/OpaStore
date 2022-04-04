<?php

    include('header_footer/header.php');
    include('banco_de_dados/conexao.php');



    $stmt = $pdo ->prepare("select * from ourico;");

    $stmt ->execute();

?>

<div class="contOurico">

<?php

    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
        
?>

        <div class="cardOurico">

            <h2 class="nomeOurico"><?php  echo $row['nome']?></h2>
            <img src="<?php echo $row['dir'] ?>" width="350px" height="220px" />
            <p><?php  echo $row['DescOurico']  ?></p>
            <p><?php  echo $row['idade']  ?> Anos</p>
            <p><?php  echo $row['peso'] ?>Kg</p>
            <p><?php  echo $row['altura']?>Cm</p>
            <p><?php  echo $row['personalidade']  ?></p>
            <p><?php  echo $row['nacionalidade']  ?></p>
            <p><?php  echo $row['dieta']  ?></p>
            <p><?php  echo $row['posicao_politica']  ?></p>
            <p><?php  echo $row['religiao']  ?></p>

        
        </div>

  
<?php
        }

?>

</div>

<div class="contCompra">

    <h2>

        Gostou de algum?

    </h2>

    <p>

        Todos os nossos ouriços são extremamente bem cuidados e tratados com esmero, o nosso cuidado com o transporte e valores
        não é diferente.
        Caso tenha se interessado por algum mande um email para <p class="email"> OuriçoGarbosoCompra@opaStore.br </p>

    </p>

</div>

<?php

    include('header_footer/footer.php');

?>