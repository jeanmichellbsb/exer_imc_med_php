<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>

    <center>
        <form action="result_imc.php" method="GET"><br>
            <fieldset style="width:45%; background-color: rgb(250, 250, 250);" >
                <legend>Calculadora de IMC</legend>
                    <div>
                        <br><br>
                            <label for="peso"> Informe o Peso: </label>
                            <input type="text" id="peso" name="peso" required>
                            <br><br>
                    
                            <label for="altura">Informe a Altura: </label>
                            <input type="text" id="altura" name="altura" required>
                            <br><br><br>

                            <input type="submit" value="Calcule o IMC">
                            <br><br><br>
                    </div>
            </fieldset>        
        </form>
    </center>   
    
</body>
</html>
