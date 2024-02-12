<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes de Shiba Inu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .shiba-image {
            width: 70%; /* Tamaño ajustable según tus preferencias */
            height: auto;
            margin: 20px auto;
            display: block;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        button {
            background-color: #1E90FF; /* Cambié el color a un azul oscuro */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0066CC; /* Cambié el color del hover para hacerlo más oscuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Imágenes de Shiba Inu</h1>
        <?php
            //Comentario añadido para testear GitHub
            
            // Función para obtener una nueva imagen de Shiba Inu
            function obtenerNuevaImagen() {
                // Se realiza la petición a la API de shibe.online para obtener una imagen de shiba
                $shiba_images_json = file_get_contents('http://shibe.online/api/shibes?count=1&urls=true');
                // Se decodifica el JSON y se convierte a un array de URLs
                $shiba_images = json_decode($shiba_images_json);
                return $shiba_images[0];
            }

            // Si se ha pulsado el botón "Otra imagen"
            if (isset($_POST['otra_imagen'])) {
                // Se obtiene una nueva imagen de Shiba Inu
                $imagen_shiba = obtenerNuevaImagen();
            } else {
                // Por defecto, se muestra una imagen al cargar la página
                $imagen_shiba = obtenerNuevaImagen();
            }
        ?>

        <!-- Se muestra la imagen de shiba -->
        <img src="<?php echo $imagen_shiba; ?>" alt="Shiba Inu" class="shiba-image">

        <!-- Botón para obtener otra imagen -->
        <form method="post">
            <button type="submit" name="otra_imagen">Otra imagen</button>
        </form>
    </div>
</body>
</html>
