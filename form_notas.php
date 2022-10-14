<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
</head>
<body>

    <center>
        <form action="result_med.php" method="GET"><br>
            <fieldset style="width:45%; background-color: rgb(250, 250, 250);" >
                <legend>Calculadora de Média</legend>
                    <div>
                        <br><br>
                            <label for="nome"> Informe o Nome do Aluno: </label>
                            <input type="text" id="nome" name="nome">
                            <br><br>

                            <label for="nota1"> Informe a 1ª Nota: </label>
                            <input type="text" id="nota1" name="nota1">
                            <br><br>
                    
                            <label for="nota2">Informe a 2ª Nota: </label>
                            <input type="text" id="nota2" name="nota2">
                            <br><br><br>
                    
                            <input type="submit" value="Calcule a Média">
                            <br><br><br>
                    </div>
            </fieldset>        
        </form>
    </center>   
    
</body>
</html>