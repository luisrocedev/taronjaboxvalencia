# TaronjaBoxValencia

## 📌 Descripción del Proyecto
TaronjaBoxValencia es un sitio web en desarrollo diseñado para facilitar la gestión de un centro de CrossFit. Su principal objetivo es permitir a los administradores actualizar el contenido sin necesidad de tocar el código, gracias a su estructura modular y conexión con una base de datos MySQL.

## 🏗️ Estructura del Proyecto
El proyecto está organizado en las siguientes carpetas:

- **📂 backend/** → Contiene los archivos PHP que manejan la lógica del servidor y la conexión con la base de datos.
  - 📂 `config/` → Contiene `db_connect.php` para la conexión a la base de datos.
  - 📂 `api/` → Múltiples archivos API que manejan datos de distintas secciones como `header`, `blog`, `contacto`, etc.
- **📂 database/** → Contiene el archivo SQL (`taronjaboxvalencia (5).sql`) con la estructura de la base de datos.
- **📂 modulos/** → Cada funcionalidad (header, destacados, blog, contacto) está implementada como un módulo independiente.
- **📂 img/** → Carpeta destinada a las imágenes utilizadas en la web.
- **📜 index.php** → Archivo principal que carga el sitio web.

## 🔧 Tecnologías Utilizadas
- **Frontend**: HTML, CSS, JavaScript (fetch para llamadas API).
- **Backend**: PHP con APIs REST.
- **Base de Datos**: MySQL.
- **Entorno**: Servidor VPS en IONOS para producción.

## ⚙️ Conexión a la Base de Datos
El archivo `db_connect.php` maneja la conexión a MySQL utilizando una clase llamada `ConexionBD`:

```php
class ConexionBD {
    private $host = "localhost";
    private $usuario = "taronjaboxvalencia";
    private $password = "taronjaboxvalencia";
    private $base_datos = "taronjaboxvalencia";
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}
```
---

## 📡 APIs Implementadas

El proyecto usa varias APIs en `backend/api/` para gestionar diferentes secciones dinámicas:

- **`api_header.php`** → Devuelve el menú de navegación desde la base de datos.
- **`api_blog.php`** → Devuelve las publicaciones del blog en formato JSON.
- **`api_contacto.php`** → Gestiona los mensajes enviados desde el formulario de contacto.

### Ejemplo de API dinámica (`api_header.php`):

```php
header('Content-Type: application/json');
require_once '../config/db_connect.php';
$conexion = new ConexionBD();
$query = "SELECT id, nombre, enlace FROM header ORDER BY id ASC";
$result = $conexion->conexion->query($query);
$menu = [];
while ($row = $result->fetch_assoc()) {
    $menu[] = $row;
}
echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$conexion->cerrarConexion();
```

---

## 🗄️ Base de Datos

El proyecto incluye una base de datos MySQL con la siguiente estructura principal:

- **`header`** → Contiene las secciones dinámicas del sitio.
- **`blog_posts`** → Almacena los artículos del blog.
- **`usuarios_admin`** → Maneja la autenticación de administradores.
- **`equipo`** → Contiene información sobre los entrenadores y staff del centro de CrossFit.
- **`fisioterapia`** → Almacena información sobre los servicios de fisioterapia disponibles.
- **`workouts`** → Gestiona la información sobre los entrenamientos y horarios.
- **`precios`** → Permite gestionar los planes de suscripción y tarifas.

📌 **Todas estas secciones siguen la filosofía del proyecto:** hacer la web lo más dinámica posible para facilitar la administración sin necesidad de modificar el código manualmente.

## 🔗 Integración con DarkOrange

TaronjaBoxValencia está integrado con el **repositorio DarkOrange**, que es el panel de administración encargado de gestionar todo el contenido de la web. DarkOrange permite a los administradores modificar, añadir o eliminar contenido de manera sencilla sin necesidad de acceder directamente a la base de datos.

---

## 📜 Documentación del Proyecto

Si deseas ver el **manual detallado del código**, puedes hacerlo de dos maneras:

1. **Accediendo al repositorio del proyecto script**, donde se incluyen explicaciones generadas automáticamente mediante **docstrings en PHP**.
2. **Explorando directamente el código fuente en el repositorio de TaronjaBoxValencia**, donde el código está comentado para facilitar su comprensión.

📌 **Repositorio del script:** [Enlace pendiente a GitHub]  
📌 **Repositorio del código:** [https://github.com/luisrocedev/taronjaboxvalencia](https://github.com/luisrocedev/taronjaboxvalencia/tree/main)

---

## 👨‍💻 Contacto

Si tienes preguntas o sugerencias, ¡contáctame en **LinkedIn** o revisa mi **GitHub**! 🚀

