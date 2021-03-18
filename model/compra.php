<?php

class Compra
{
    private $db;

    public function __construct()
    {
        $dbServer = '127.0.0.1';
        $dbUser = 'root';
        $dbPass = 'password';
        $dbName = 'php_m8';
        
        $this->db = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
        if ($this->db->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $this->db->connect_error;
        }
    }
    
    // CREAR REGISTRO PRODUCTO
    public function create($data)
    {
        $nom = $data['nom'];
        $quantitat = $data['quantitat'];
        $preu = $data['preu'];
        $sql = "INSERT INTO compra (nom, quantitat, preu) VALUES ('$nom', '$quantitat', '$preu');";
        $result = $this->db->query($sql);
        $this->db->close();

        return ($result ? true : false);
    }

    // LEER TODOS LOS PRODUCTOS O FILTRADO POR ID
    public function read($id = null)
    {
        if (is_null($id)) {
            $sql = "SELECT * FROM compra";
        } else {
            $sql = "SELECT * FROM compra WHERE id = $id";
        }
        $result = $this->db->query($sql);
        $this->db->close();
        return is_null($id) ? $result->fetch_all(MYSQLI_ASSOC) : $result->fetch_assoc();
    }

    // ACTUALIZAR PRODUCTO
    public function update($data)
    {
        $id = $data['id'];
        $nom = $data['nom'];
        $quantitat = $data['quantitat'];
        $preu = $data['preu'];
        $sql = "UPDATE compra SET nom='$nom', quantitat='$quantitat', preu='$preu' WHERE id = '$id'";
        $result = $this->db->query($sql);
        $this->db->close();

        return ($result ? true : false);
    }

    // BORRAR PRODUCTO
    public function delete($id)
    {
        $sql = "DELETE FROM compra WHERE id='$id'";
        $result = $this->db->query($sql);

        return ($result ? true : false);
    }
}
