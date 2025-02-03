<?php
class ConexionBD
{
    private $host = "localhost";
    private $usuario = "taronjaboxvalencia"; // Cambiar según servidor
    private $password = "taronjaboxvalencia"; // Cambiar según servidor
    private $base_datos = "taronjaboxvalencia"; // Nombre de la base de datos
    public $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion()
    {
        $this->conexion->close();
    }
}
