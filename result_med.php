<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Média</title>
</head>
<body>
    <?php

        $nome = ($_GET["nome"]);
        $nota1 = floatval($_GET["nota1"]);
        $nota2 = floatval($_GET["nota2"]);

        if (strpos($nota2, ',') !== false){
            $nota2 = floatval(str_replace(",",".", $nota2));

        } else {
            $nota2 = floatval($nota2);
        }

        $med = round(($nota1 + $nota2) / 2, 2);

        $sit = " ";

        if ($med < 4){
            $sit = '<b><font color="#B22222">REPROVADO</font></b>';
        } else if ($med >= 4 && $med < 6){
            $sit = '<b><font color="#FF8C00">EXAME FINAL</font></b>';
        } else {
            $sit = '<b><font color="#0000FF">APROVADO</font></b>';
        }
 
    ?>

        <center>
            <fieldset style="width:45%; background-color: rgb(250, 250, 250);" >
                <legend>Resultado</legend>
                    <div>

                        <p>Nome: <?php echo $nome ?></p>
                        <p>Média: <?php echo $med ?></p>
                        <p>Situação: <?php echo $sit ?></p>  
                          
                    </div>
            </fieldset>
        </center>
    
</body>
</html>