<?php

    session_start();
    

    $usuarios_autenticado = false;

    $usuarios_app = array(
        array( 'email' => 'grandeg2009@hotmail.com', 'senha'=> '123'    ),
        array( 'email' => 'gabrielgomespf@outlook.com', 'senha'=> '456'    ),


    );


        foreach($usuarios_app as $idc => $usuarioslogados ){    

        if($_POST['email'] == $usuarioslogados['email'] && $_POST['senha'] == $usuarioslogados['senha']){
            $usuarios_autenticado = true;
        }
    }

        if($usuarios_autenticado){
            echo 'Usuario autenticado';
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['x'] = 'Um valor';
            $_SESSION['y'] = 'Outro valor';
            header('Location:home.php');

        }else{
            $_SESSION['autenticado'] = 'NAO';
            header('Location:index.php?login=erro');
            

        }



    /*print_r($_POST);
        echo'<br/>';
        
      echo  $_POST['email'];
      echo'<br/>';
      echo  $_POST['senha'];*/


?>