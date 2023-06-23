<?php 

    // IMPORT DA CLASSE DO USUÁRIO

    require_once('../model/Usuario.php');

    //INSTACIAMENTO DO OBJETO

    $usuario = new Usuario($_GET['txtNome'], $_GET['txtIdade'], $_GET['txtPeso'], $_GET['txtAltura']);

    //INSTACIAMENTO DO RESULTADO.PHP

    header("Location: ../view/resultado.php?"

        ."txtNome=".$usuario->getNomeUsuario()
        ."&txtIdade=".$usuario->getIdadeUsuario()
        ."&txtPeso=".$usuario->getPesoUsuario()
        ."&txtAltura=".$usuario->getAlturaUsuario()
        ."&txtImc=".$usuario->getImcUsuario()
        ."&txtCategoriaImc=".$usuario->getCategoriaImcUsuario()

    );

?>