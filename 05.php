<?php
include 'includes/header.php';

//Forzar tipado

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    
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