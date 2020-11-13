<?php
if (!isset($_SESSION['usuario'])){
    $usuario = 'luizluiz';
    $senha = 'luiz@site.com';
    $projeto = 'projeto final';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $senha;
    $_SESSION['projeto'] = $projeto;
    switch ($_GET['pg']){
        case 'cpanel':
            include_once "app/painelAdm/index.php";
        break;
       
            case 'login':
                include_once "app/painelAdm/index.php";
            break;

            default:
        break;
    }
} else {
    include_once "app/painelAdm/paginas/login.php";
};

$paginas= isset($_GET['pg']);
if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
        case 'cpanel':
            include_once "app/painelAdm/paginas/login.php";
            break;

       
        default:
        include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    
}

//Rodape
