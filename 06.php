<?php
include 'includes/header.php';

// Constructor Properties Promotion

class Empleado {

    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
    
}

$empleado = new Empleado("Juan", "Perez", "Ventas", "correo@correo.com", 1234);

//segunda instancia
$empleado2 = new Empleado("Mimi", "Herrera", "Sistemas", "correo3@correo.com", 3333);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";