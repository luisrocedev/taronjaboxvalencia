<?php

/**
 * Clase: ConexionBD
 * Descripción: Gestiona la conexión a la base de datos utilizando MySQLi.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando las credenciales proporcionadas.
 * - Muestra un mensaje de error si la conexión falla.
 * - Permite cerrar la conexión con el método `cerrarConexion`.
 */

class ConexionBD
{
    // Parámetros de conexión (modificar según las credenciales del servidor)
    private $host = "localhost"; // Servidor de la base de datos
    private $usuario = "taronjaboxvalencia"; // Usuario de la base de datos
    private $password = "taronjaboxvalencia"; // Contraseña del usuario
    private $base_datos = "taronjaboxvalencia"; // Nombre de la base de datos

    // Propiedad pública que contendrá el objeto de conexión
    public $conexion;

    /**
     * Constructor: establece la conexión a la base de datos.
     */
    public function __construct()
    {
        // Intentar establecer la conexión con la base de datos
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);

        // Verificar si hubo un error en la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    /**
     * Método para cerrar la conexión con la base de datos.
     */
    public function cerrarConexion()
    {
        $this->conexion->close();
    }
}
