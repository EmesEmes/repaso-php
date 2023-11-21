<?php
include 'includes/header.php';
include 'DB.php';

//Comunicar dos o mas clases

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

$emilio= new Empleado("Emilio", "Gomez", "Ventas", "empleado@empresa", 1234);
$nombre = $emilio->getNombre();

$db = new DB($nombre);
$db->guardar();
var_dump($db);