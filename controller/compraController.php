<?php

require_once("model/compra.php");
require_once("model/taula.php");
require_once("model/formulari.php");

class compraController
{

    // REDIRECCIÓN A INDEX.PHP
    static function index()
    {
        $table = new Taula();
        require_once("view/index.php");
    }

    // REDIRECCIÓN A INSEREIX.PHP
    static function insereix()
    {
        $form = new Formulari('create', 'Inserir');
        require_once("view/insereix.php");
    }

    // INSERTAR PRODUCTO
    static function create()
    {
        $data['nom'] = $_POST['nom'];
        $data['quantitat'] = $_POST['quantitat'];
        $data['preu'] = $_POST['preu'];
        $compra = new Compra();
        $isRegistered = $compra->create($data);
        if ($isRegistered) {
            header("location:" . urlsite);
        } else {
            require_once("view/insereix.php");
        }
    }

    // REDIRECCIÓN A MODIFICAR.PHP
    static function modificar()
    {
        $id = $_GET['id'];
        $compra = new Compra();
        $data = $compra->read($id);
        $form = new Formulari('update', 'Modificar', $data);
        require_once("view/modificar.php");
    }

    // MODIFICAR PRODUCTO
    static function update()
    {
        $data['id'] = $_POST['id'];
        $data['nom'] = $_POST['nom'];
        $data['quantitat'] = $_POST['quantitat'];
        $data['preu'] = $_POST['preu'];
        $compra = new Compra();
        $isRegistered = $compra->update($data);
        if ($isRegistered) {
            header("location:" . urlsite);
        } else {
            require_once("view/modificar.php");
        }
    }

    // ELIMINAR PRODUCTO
    static function delete()
    {
        $id = $_GET['id'];
        $compra = new Compra();
        $data = $compra->delete($id);
        header("location:" . urlsite);
    }
}
