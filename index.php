<?php
require_once("config.php");
require_once("controller/compraController.php");
if(isset($_GET['m'])){
    $metodo = $_GET['m'];
    if(method_exists('compraController',$metodo)) {
        compraController::{$metodo}();
    }
} else{
    compraController::index();
}
?>
