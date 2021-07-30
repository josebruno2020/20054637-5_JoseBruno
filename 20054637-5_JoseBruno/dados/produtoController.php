<?php
require('homeController.php');
$title = 'Produto';
$page = 'produto';
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');
    $produto = $produtos[$id];
}