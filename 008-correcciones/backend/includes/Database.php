<?php
class Database
{
	private $conn;

	// Constructor: Recibe la conexión a la base de datos
	public function __construct($conn)
	{
		$this->conn = $conn;
	}

	// Método para obtener todos los datos de una tabla
	public function getAll($tabla)
	{
		$query = "SELECT * FROM {$tabla}";
		$result = $this->conn->query($query);

		if (!$result) {
			die("Error en la consulta: " . $this->conn->error);
		}

		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	// Método para buscar datos en una tabla con un filtro
	public function getByColumn($tabla, $columna, $valor)
	{
		$query = "SELECT * FROM {$tabla} WHERE {$columna} = ?";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param("s", $valor);
		$stmt->execute();
		$result = $stmt->get_result();

		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	// Método para cerrar la conexión
	public function close()
	{
		$this->conn->close();
	}
}
