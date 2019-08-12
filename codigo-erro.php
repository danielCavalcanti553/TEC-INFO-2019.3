<?php
    if(isset($_GET['erro'])){
        switch($_GET['erro']){
            case 101:
                $erro = "Login Inválido";
                break;

            case 102:
                $erro = "Necessário realizar o login";
                break;
        }
    }

    if(isset($erro))
        echo '<div class="alert alert-danger" role="alert">'.$erro.'</div>';


    
?>