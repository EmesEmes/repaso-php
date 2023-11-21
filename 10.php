<?php
include 'includes/header.php';

class Persona {
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion() {
        echo $this->nombre . " " . $this->apellido . "<br>";
    }

    public function getTelefono() {
        return $this->telefono . "<br>";
    }
}

//Herencia
class Empleado extends Persona {

    protected $codigo;
    protected $departamento;
    
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona{
    
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }
    
}

$empleado =new Empleado("Juan", "Perez", "empleado@empresa.com", "12345678", 1234, "Ventas");
$proveedor = new Proveedor("Emilio", "Gomez", "empresa@empresa.com", "12345678", "Empresa SA de CV");

$empleado->mostrarInformacion();
$proveedor->mostrarInformacion();

echo $empleado->getTelefono();
echo $proveedor->getTelefono();

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";