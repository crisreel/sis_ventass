<?php
// Captura el texto adicional enviado por el usuario
$texto_adicional = isset($_POST['texto_adicional']) ? $_POST['texto_adicional'] : '';

// Validar si se proporcionó texto adicional
if (!empty($texto_adicional)) {
    // Puedes realizar algunas validaciones adicionales aquí si es necesario

    // Devuelve el texto de observación actualizado
    echo $texto_adicional;
} else {
    // Si no se proporcionó ningún texto adicional, devolver un mensaje de error
    echo "Error: No se proporcionó ningún texto adicional.";
}
?>
