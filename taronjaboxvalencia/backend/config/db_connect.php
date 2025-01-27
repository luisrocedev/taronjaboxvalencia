<?php
// Configuración de la base de datos
$servername = "localhost";  // El servidor donde se encuentra la base de datos
$username = "taronjaboxvalencia"; // El usuario de la base de datos
$password = "taronjaboxvalencia"; // Contraseña de la base de datos
$dbname = "taronjaboxvalencia";   // El nombre de la base de datos

// Crear conexión básica con mysqli (por si se necesita para otras funcionalidades)
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Clase de conexión dinámica
class ConexionBD
{
    // Propiedades de la clase
    private $conexion;

    // Método constructor
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conexion = mysqli_connect(
            $servername,
            $username,
            $password,
            $dbname
        );

        if (!$this->conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    }

    // Método para buscar algo en una tabla con filtro
    public function buscaAlgo($tabla, $columna, $dato)
    {
        $peticion = "
            SELECT * 
            FROM {$tabla}
            WHERE {$columna} = '{$dato}'
        ;";
        $resultado = mysqli_query($this->conexion, $peticion);
        $json = [];
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            $json[] = $fila;
        }
        return json_encode($json); // Devuelve los resultados en formato JSON
    }

    // Método para obtener todos los datos de una tabla
    public function pideAlgo($tabla)
    {
        $peticion = "SELECT * FROM {$tabla};";
        $resultado = mysqli_query($this->conexion, $peticion);
        $json = [];
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            $json[] = $fila;
        }
        return json_encode($json); // Devuelve los resultados en formato JSON
    }
}

// Crear una instancia global de la clase `ConexionBD` para reutilizar en el proyecto
$conexionBD = new ConexionBD($servername, $username, $password, $dbname);
