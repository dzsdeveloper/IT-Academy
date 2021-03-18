<?php
require_once("model/compra.php");

class Taula extends Compra
{
    private $data;
    private $total;

    public function __construct()
    {
        parent::__construct();
        $this->data = $this->read();
        $this->total = $this->calcTotal();
    }

    // CALCULAR EL TOTAL DE TODA LA COMPRA
    private function calcTotal()
    {
        $total = 0;
        foreach ($this->data as $value) {
            $total += ($value['preu'] * $value['quantitat']);
        }
        return $total;
    }

    // MOSTRAR TABLA
    public function show()
    {

        echo <<<EOT
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Quantitat</th>
                    <th scope='col'>Preu unitat</th>
                    <th scope='col'>Preu</th>
                    <th scope='col'>Acció</th>
                </tr>
            </thead>
            <tbody>
        EOT;
        foreach ($this->data as $value) {
            $preu = ($value['quantitat'] * $value['preu']);
            echo <<<EOT
                <tr>
                    <td>{$value['nom']}</td>
                    <td>{$value['quantitat']}</td>
                    <td>{$value['preu']}</td>
                    <td>$preu</td>
                    <td>
                        <div class='row justify-content-around'>
                            <a class='btn btn-warning' href='index.php?m=modificar&id={$value['id']}' role='button'>Modifica</a>
                            <a class='btn btn-danger' href='index.php?m=delete&id={$value['id']}' role='button'>Esborra</a>
                        </div>
                    </td>
                </tr>
            EOT;
        }
        echo <<<EOT
                <tr>
                    <th class='text-right' scope='row' colspan='3'>TOTAL:</th>
                    <td colspan='2'>$this->total</td>
                </tr>
            </tbody>
        </table>
        EOT;
    }
}
