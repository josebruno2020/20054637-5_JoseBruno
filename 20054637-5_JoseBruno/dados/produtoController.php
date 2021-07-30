<?php
require('homeController.php');
$css = 'produto.css';
$title = 'Produto';
$page = 'produto';
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');
    $produto = $produtos[$id];
}