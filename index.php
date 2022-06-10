<?php

require_once 'modelo/persona.php';
require_once 'modelo/nacionalidad.php';


$n=new Nacionalidad();
$n->id='+54';
$n->descripcion='Argentina';

$p=new Persona();
$p->Nombre='Daiana Patallo';
$p->Direccion='Alem 1300';
$p->Documento=36738097;
$p->Email='daianapatallo@gmail.com';
$p->Nacionalidad=$n;



$p->MostrarPropiedades();