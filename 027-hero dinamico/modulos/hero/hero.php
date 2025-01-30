<?php
// Conectar con la base de datos
include "backend/config/db_connect.php";

// Obtener el nombre de la sección actual (por ejemplo, 'bienvenida')
$seccion = basename(__DIR__);

// Consultar el Hero de esta sección
$sql = "SELECT * FROM heroes WHERE nombre_seccion = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $seccion);
$stmt->execute();
$resultado = $stmt->get_result();
$hero = $resultado->fetch_assoc();

// Si existe el Hero, mostrarlo
if ($hero):
?>
    <section id="hero" style="background-image: url('<?php echo $hero['imagen_fondo']; ?>');">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1><?php echo $hero['titulo']; ?></h1>
            <p><?php echo $hero['subtitulo']; ?></p>
            <?php if (!empty($hero['texto_boton']) && !empty($hero['enlace_boton'])): ?>
                <a href="<?php echo $hero['enlace_boton']; ?>" class="btn"><?php echo $hero['texto_boton']; ?></a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>