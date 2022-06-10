<?php
require_once 'modelo/nacionalidad.php';
class Persona {
    public $Nombre;
    public $Direccion;
    public $Documento;
    public $Email;

    public $Nacionalidad;

    public function MostrarPropiedades(){
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Dirección: ' . $this->Direccion . '<br>';
        echo 'Documento: ' . $this->Documento . '<br>';
        echo 'E-mail: ' . $this->Email . '<br>';

        echo 'Id: ' . $this->Nacionalidad->id . '<br>';
        echo 'Descripción: ' . $this->Nacionalidad->descripcion;
    }
}