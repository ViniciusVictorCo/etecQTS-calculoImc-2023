<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./assets/img/qts.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">    
    <title>Imposto de Renda - Resultado</title>
</head>
<body>
    <div class="container">
        <div class="buttons">
            <h2 id="titulo" >Resultado do seu Indice Massa Corporal(IMC)</h2>
                <form action="index.php" method="POST">
                    <label for="">Nome:</label>
                    <input type="text" name="txtNome" id="txtNome" readonly value="<?php echo($_GET['txtNome']);?>">

                    <label for="">Idade:</label>
                    <input type="text" name="txtIdade" id="txtIdade" readonly value="<?php echo($_GET['txtIdade']);?>">

                    <label for="">Peso:</label>
                    <input type="text" name="txtPeso" id="txtPeso" readonly value="<?php echo($_GET['txtPeso']);?>">

                    <label for="">Altura:</label>
                    <input type="text" name="txtAltura" id="txtAltura" readonly value="<?php echo($_GET['txtAltura']);?>">

                    <label for="">IMC:</label>
                    <input type="text" name="txtImc" id="txtImc" readonly value="<?php echo($_GET['txtImc']);?>">

                    <label for="">Categoria do IMC:</label>
                    <input type="text" name="txtCategoriaImc" id="txtCategoriaImc" readonly value="<?php echo($_GET['txtCategoriaImc']);?>">

                    <button type="submit" >Voltar Para Formúlario
                </form> 
        </div>
    </div>
</body>
</html>