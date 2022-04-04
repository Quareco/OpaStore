<?php

    include('header_footer/header.php');
 

?>
   
   <form action="validar.php" method="POST">

    <div class="contLogin">

        <h1 class="usu">Seja bem vindo, funcionário</h1>

        <div class='form'>

            <input class="txtnome" type="text" placeholder="Email" name="txEmail"><br>

        </div>

        <div class="form">

            <input class="txtsenha" type="password" placeholder="Senha" name="txSenha"><br>
        
        </div>

        <div class='form'>

            <input class="btn" type="submit" value="logar">

        </div>

    </div>

    </form>


    <?php

        if(isset($_POST['logar'])== true){

        check();

        };


        include('header_footer/footer.php');

?>