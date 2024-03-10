<?php
session_start();

$data = $_FILES;
$response = null;
$storage = './storage/';

if (count($data) > 0) {
    if (is_dir($storage)) {
        $uploaded = move_uploaded_file($_FILES['image']['tmp_name'], "{$storage}{$_FILES['image']['name']}");
        if ($uploaded) {
            $response['type'] = 'success';
            $response['data'] = $data;
            $response['text'] = 'Imagen subida con éxito';
        } else {
            $response['type'] = 'error';
            $response['text'] = 'Ocurrió un problema al subir la imagen, intente nuevamente';
        }
    } else {
        mkdir($storage);
        $response['type'] = 'warning';
        $response['text'] = 'Por favor inténtelo nuevamente';
    }
}
$_SESSION['response'] = $response;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir foto de perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <?php if (isset($_SESSION['response'])) : ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-<?= $_SESSION['response']['type']; ?>">
                        <?= $_SESSION['response']['text']; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12">
                <h1>Cambiar imagen de perfil</h1>
                <form action="/" method="post" id="form-profile" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen que desea subir:</label>
                        <input type="file" id="image" name="image" required="required" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Subir</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <?php
                if (is_dir($storage)) {
                    $images = scandir($storage, 1);                    
                    if ($images != false) {
                        foreach ($images as $key => $image) {
                            if ($image !== '.' && $image !== '..') {
                                echo "<div class=\"col-3\">
                                    <img src=\"{$storage}{$image}\" class=\"img-thumbnail\">
                                </div>";
                            }                        
                        }
                    }                
                } else {
                    echo '<div class="col-12">
                            <div class="alert alert-warning">No se encontraron imágenes para mostrar</div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>