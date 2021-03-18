<?php

class Formulari
{
    private $button;
    private $action;
    private $id;
    private $nom;
    private $quantitat;
    private $preu;


    public function __construct($action, $button, $data = null)
    {
        $this->action = $action;
        $this->button = $button;
        if (!is_null($data)) {
            $this->id = $data['id'];
            $this->nom = $data['nom'];;
            $this->quantitat = $data['quantitat'];;
            $this->preu = $data['preu'];;
        }
    }

    // MOSTRAR FORMULARIO
    public function show()
    {
        echo <<<EOT
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="index.php?m=$this->action" method="POST">
                    <div class="form-group d-none">
                        <label for="id">Id</label>
                        <input type="number" class="form-control" id="id" name="id" value="$this->id">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="$this->nom" placeholder="Introdueix el nom">
                    </div>
                    <div class="form-group">
                        <label for="quantitat">Quantitat</label>
                        <input type="number" class="form-control" min="1" id="quantitat" name="quantitat" value="$this->quantitat" placeholder="Introdueix la quantitat">
                    </div>
                    <div class="form-group">
                        <label for="preu">Preu unitari</label>
                        <input type="number" class="form-control" step="0.01" min="0.01" id="preu" name="preu" value="$this->preu" placeholder="Introdueix el preu unitari">
                    </div>
                    <button type="submit" class="btn btn-primary">$this->button</button>
                </form>
            </div>
        </div>
        EOT;
    }
}
