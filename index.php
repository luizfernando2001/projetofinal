<?php
//header
include_once "app\site\paginas\includes\header.php";


// navegaçao 
include_once "app/site/paginas/includes/navegacao.php";


// Paginas do meu site 
//echo '<h1>MINHAS PAGINAS</h1>';
$paginas= isset($_GET['pg']);

// Rodapé
include_once "app/site/paginas/includes/footer.php";