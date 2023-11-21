<?php
include 'includes/header.php';

// Getter and Setter
class Empleado {

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
    /*
        get: obtener el valor de una propiedad
        set: cambiar o modificar el valor de una propiedad
    */
    public function getNombre() {
        return $this->nombre . "<br>";
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getApellido() {
        return $this->apellido . "<br>";
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getDepartamento() {
        return $this->departamento . "<br>";
    }
    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }
    public function getEmail() {
        return $this->email . "<br>";
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getCodigo() {
        return $this->codigo . "<br>";
    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    
}

$empleado = new Empleado("Juan", "Perez", "Ventas", "correo@correo.com", 1234);
$empleado->setNombre("Emilio");
$empleado->setApellido("del Hierro");
$empleado->setDepartamento("QA");
$empleado->setEmail("emilio@empresa.com");
$empleado->setCodigo(123456);

echo $empleado->getNombre();
echo $empleado->getApellido();
echo $empleado->getDepartamento();
echo $empleado->getEmail();
echo $empleado->getCodigo();
echo "<br>";


echo "<pre>";
var_dump($empleado);
echo "</pre>";