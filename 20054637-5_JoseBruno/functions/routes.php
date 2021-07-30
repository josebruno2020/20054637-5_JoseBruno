<?php
$title = '';
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}

$base_dir = __DIR__.'/../dados/';
switch ($_SERVER['REQUEST_URI']) {
    case '/' :
        require($base_dir.'homeController.php');
        break;

    case '/produto':
    case '/produto?id='.$id:
    require($base_dir.'produtoController.php');
        break;

    case '/quem-somos':
        require($base_dir.'quemsomosController.php');
        break;

    case '/contato':
        require($base_dir.'contatoController.php');
        break;

    case '/onde-estamos':
        require($base_dir.'ondeestamosController.php');
        break;

    default:
        require($base_dir.'notfoundController.php');
        break;

}