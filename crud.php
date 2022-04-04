<?php

    include('header_footer/header.php');
    include('banco_de_dados/conexao.php');

?>



    <section>

        <div class="caixinha">

            <form method="post" action="inserir.php">

                <h2>Cadastro Ouriço</h2>

                <input type="hidden" placeholder="idOurico" name="txIdOurico"/>

                <div>

                    <input type="text" placeholder="Nome do ouriço" name="txNome"/>

                </div>

                <div>

                    <input type="text" placeholder="Desc. do ouriço" name="txDesc"/>

                </div>

                <div>

                    <input type="text" placeholder="Idade do ouriço" name="txIdade"/>

                </div>

                <div>

                    <input type="text" placeholder="Peso do ouriço" name="txPeso"/>

                </div>


                <div>

                    <input type="text" placeholder="Altura do ouriço" name="txAltura"/>

                </div>

                <div>

                    <input type="text" placeholder="Perso. do ouriço" name="txPerso"/>

                </div>

                <div>

                    <input type="text" placeholder="Nacio. do ouriço" name="txNacio"/>

                </div>

                <div>

                    <input type="text" placeholder="Dieta do ouriço" name="txDieta"/>

                </div>  
                
                <div>

                    <input type="text" placeholder="Polí. do ouriço" name="txPoli"/>

                </div>            

                <div>

                    <?php

                        $stmtRel = $pdo->prepare("select religiao from ourico");	
                        $stmtRel->execute();

                    ?>

                    <select name="txReli">
                    
                    <option value=0>Escolha uma religião</option>

                    <?php	
                        
                        while($rowRel = $stmtRel ->fetch(PDO::FETCH_BOTH)){		

                            echo "<option>  $rowRel[0] </option>";	

                        }	

                    ?>

                    </select>	

                </div>	

                <div>

                    <input type="submit" value="Salvar"/>

                </div>

            </form>

        </div>

    </section>

    <h2>Lista Ouriços</h2>

    <section>

        <table border="1">

            <th>Nome</th>
            <th>Descrição</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Personalidade</th>
            <th>Nacionalidade</th>
            <th>Dieta</th>
            <th>Posição Política</th>
            <th>Religião</th>                                    
            <th> &nbsp; </th>
            <th> &nbsp; </th>


            <tbody>

                <?php
                
                    $stmt = $pdo -> prepare("select idOurico, nome, DescOurico, idade, peso, altura, personalidade, nacionalidade, 
                        dieta, posicao_politica, religiao from ourico");

                    $stmt ->execute();

                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){

                        echo "<tr>";

                            echo"<td> $row[1] </td>";
                            echo"<td> $row[2] </td>";
                            echo"<td> $row[3] anos</td>";
                            echo"<td> $row[4]Kg </td>";
                            echo"<td> $row[5]Cm </td>";
                            echo"<td> $row[6] </td>";
                            echo"<td> $row[7] </td>";
                            echo"<td> $row[8] </td>";
                            echo"<td> $row[9] </td>";
                            echo"<td> $row[10] </td>";
                            echo"<td>   <a href='delete.php?id=$row[0]'> Deletar </a> </td>";
                            echo"<td>";

                                echo"<a href='?id=$row[0]&nome=$row[1]desc=$row[2]&idade=$row[3]&peso=$row[4]&alt=$row[5]&pers=$row[6]&nac=$row[7]&di=$row[8]&posi=$row[9]&rel=$row[10]'> 
                                Alterar </a>";

                            echo "</td>";

                        echo"</tr>";

                    }

                ?>

            </tbody>

        </table>

    </section>

<?php

    include('header_footer/footer.php');

?>