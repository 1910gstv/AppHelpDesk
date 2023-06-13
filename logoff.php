<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    //remover indices do array de sessão
        //unset(array e indice)

        unset($_SESSION['x']); //remove o indice apenas se ele existir

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';

    //destruir a variavel de sessão
        //session_destroy()

        session_destroy(); //será destruída, porém a sessão ainda fica disponivel, só 
        //será realmente destruida após uma nova requisição
        //forçar um redirect

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
?>