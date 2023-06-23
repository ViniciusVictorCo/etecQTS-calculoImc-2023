<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./assets/img/qts.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Imposto de Renda</title>
</head>
<body>
    <div class="container">
        <div class="buttons">
            <h2 id="titulo" >Formulario do calculo de Indice Massa Corporal(IMC)</h2>
                <form name="consultaForms" action="../controller/UsuarioController.php" method="GET">
                    <label for="">Nome:*</label>
                    <input type="text" name="txtNome" id="txtNome" placeholder="Digite seu nome:" required>

                    <label for="">Idade:*</label>
                    <input type="text" name="txtIdade" id="txtIdade" placeholder="Digite seu Idade:" required>

                    <label for="">Peso:(kg)*</label>
                    <input type="text" name="txtPeso" id="txtPeso" placeholder="Informe seu peso:" required>

                    <label for="">Altura:(m)*</label>
                    <input type="text" name="txtAltura" id="txtAltura" placeholder="Informe seu altura:" required>

                    <button type="submit" id="enviar" value="enviar">Enviar
                </form>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/mascaraInput.js"></script>
</body>
