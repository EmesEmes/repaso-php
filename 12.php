<?php
include 'includes/header.php';

// Metodos estaticos
// No se necesita instanciar la clase para poder acceder a sus metodos
// en este caso se usa self:: para acceder a los atributos estaticos
class Empleado {
   

    protected static $nombre;
    protected $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    public function obtenerNombre() {
        return $this->nombre . "<br>";
    }

    public function cambiarNombre($nombre) {
        $this->nombre = $nombre;
    }

    public static function obtenerEmpleado() {
        echo "desde metodo estatico" . "<br>";
    }
    
    public static function obtenerNombreStatic() {
        return self::$nombre . "<br>";
    }
}

Empleado::obtenerEmpleado();

$empleado = new Empleado("Juan", "Perez", "Ventas", "empleado@empresa", 1234); 
echo $empleado::obtenerNombreStatic(); 

echo "<pre>";
var_dump($empleado);
echo "</pre>";