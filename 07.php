<?php
include 'includes/header.php';

// Metodos de una clase
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

        //se manda a llamar cuando la clase se instancia
        $this->nombreEmpleado();
    }
    
    public function nombreEmpleado() {
        echo "Mostrando nombre del empleado: " . $this->nombre . "<br>";
    
    }

    public function departamentoEmpleado() : string {
        return $this->departamento;
        
    }
}

$empleado = new Empleado("Juan", "Perez", "Ventas", "correo@correo.com", 1234);
$empleado->nombreEmpleado();

//segunda instancia
$empleado2 = new Empleado("Mimi", "Herrera", "Sistemas", "correo3@correo.com", 3333);
$empleado2->nombreEmpleado();


echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

$departamento1 = $empleado->departamentoEmpleado();
echo $departamento1 . "<br>";