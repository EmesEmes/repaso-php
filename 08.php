<?php
include 'includes/header.php';

// Modificadores de acceso
class Empleado {
    // public, protected, private
    // public: se puede acceder desde cualquier lugar(incluso fuera de la clase)
    // protected: se puede acceder desde la misma clase o clases heredadas
    // private: solo se puede acceder desde la misma clase y no en clases heredadas

    public $nombre;
    protected $apellido;
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
    }
    public function nombreEmpleado() {
        return $this->nombre;
    
    }
    
}

$empleado = new Empleado("Juan", "Perez", "Ventas", "correo@correo.com", 1234);
echo $empleado->nombreEmpleado();



echo "<pre>";
var_dump($empleado);
echo "</pre>";


