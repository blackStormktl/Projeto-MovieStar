<?php
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDao.php");
    include_once('globals.php');
    include_once('db.php');

    $message =  new Message($URL_BASE);

    // verifica o tipo de formulário
    $type = filter_input(INPUT_POST,"type");//mostra o tipo de registro via name

    //echo $type;

    // verifica o tipo de fromulario
    if($type === "register"){
        //dados que irei receber do formulário
        $name = filter_input(INPUT_POST,"name");
        $lastname = filter_input(INPUT_POST,"lastname");
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST,"password");
        $confirmpassword = filter_input(INPUT_POST,"confirmpassword");


        // verificação de dados minimos
        if($name && $lastname && $email && $password){

        }else{
            //Enviar uma msg de erro, de dados faltantes
            $message->setMessage("Por favor, preencha todos os campos do formulário","error","back");
        }

        
    }else if($type === "login"){
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST,"password");
    }
exit;

