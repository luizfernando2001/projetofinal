<?php
//Header
include_once "app/site/paginas/includes/header.php";
//Navegaçao 




// Páginas do meu Site 

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
    include_once "app/site/paginas/inicial.php";
}

//Rodape
include_once "app/site/paginas/includes/footer.php";
