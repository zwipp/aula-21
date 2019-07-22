<?php

    include('./includes/validadores.php');

    //var_dump, mesma cisa do print_r só que mais detalhado
    //echo('<pre>');
    //print_r($_POST);
    //echo('</pre>');



    

    //verificando se o post foi enviado
    if(isset($_POST) == 0){
        $erros = 'errPost';
    }


    //criando meu array de erros
    $erros = [];


    //verificando se login foi preenchido
    if (!valida_campo($_POST['login'])) {
        $erros []= 'errLogin';
    }

    //verificando se email foi preenchido
    if (!valida_campo($_POST['email'])) {
        $erros []= 'errEmail';
    }

    //verificando se senha foi preenchido
    if (!valida_campo($_POST['senha'])) {
        $erros []= 'errSenha';
    }

    //verificando se confirmacao senha foi preenchido
    if (!valida_campo($_POST['confirmacao'])) {
        $erros []= 'errConfirmacao';
    }

    //verificando se senha é igual confirmação 
    if ($_POST['senha'] != $_POST['confirmacao']) {
        $erros []= 'errSenhasDiferentes';
    }

    //verificando idade se é numerico
    if(!intval($_POST['idade'] )){
        $erros []= 'errIdadeNãoNumerica';
    }

    //verificando se o pais é valido
    if(!valida_pais($_POST['pais'])){
        $erros []= 'errPaisInvalido';
    }

    if(count($erros) > 0){
        //algum erro aconteceu
        header('Location: index.php?erros=' . implode(',' , $erros));
    }
    else{
        //tudo nice
    }
?>