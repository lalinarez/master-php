<?php
session_start();

# Los formularios son necesarios para la comunicación entre el usuario y el sistema  

$data = $_POST;

$_SESSION['response'] = null;

if (count($data) > 0) {
    $response['status'] = 'success';
    $response['data'] = $data;
    $response['text'] = "El registro de '{$data['firstname']} {$data['lastname']}' fue registrado con éxito";
    $_SESSION['response'] = $response;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información personal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3 mb-3">
        <?php if (isset($_SESSION['response'])): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-<?= $_SESSION['response']['status']; ?>">
                        <?= $_SESSION['response']['text']; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">Por favor rellene todos los campos con sus datos</h1>
                <form action="/" id="form-info" method="POST">
                    <div class="mb-3">
                        <div class="form-label" for="firstname">Nombre(s):</div>
                        <input type="text" class="form-control" id="firstname" name="firstname" required="required" placeholder="Ingrese su(s) nombre(s)" minlength="3" maxlength="100" value="<?= $_SESSION['response']['data']['firstname'] ?? 'Luis'; ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-label" for="lastname">Apellido(s):</div>
                        <input type="text" class="form-control" id="lastname" name="lastname" required="required" placeholder="Ingrese su(s) apellido(s)" minlength="3" maxlength="100" value="<?= $_SESSION['response']['data']['lastname'] ?? 'Linarez' ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-label" for="email">Correo Electrónico:</div>
                        <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Ingrese un correo electrónico valido" value="<?= $_SESSION['response']['data']['email'] ?? 'dummy@fakedomain.com' ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-label" for="age">Edad:</div>
                        <select name="age" id="age" class="form-control" required>
                            <option selected disabled value>Seleccione su edad actual</option>
                            <?php for ($i = 18; $i <= 70; $i++) : ?>
                                <option value="<?= $i; ?>" <?= isset($_SESSION['response']['data']['age']) ? ($_SESSION['response']['data']['age'] == $i ? "selected" : '') : ''; ?> ><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-label" for="sex">Sexo:</div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" name="sex" id="H" value="H" class="btn-check" <?= isset($_SESSION['response']['data']['sex']) ? ($_SESSION['response']['data']['sex'] == 'H' ? 'checked' : '') : 'checked'; ?>>
                            <label class="btn btn-outline-primary" for="H">Hombre</label>

                            <input type="radio" name="sex" id="M" value="M" class="btn-check" <?= isset($_SESSION['response']['data']['sex']) ? ($_SESSION['response']['data']['sex'] == 'M' ? 'checked' : '') : ''; ?>>
                            <label class="btn btn-outline-primary" for="M">Mujer</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-label" for="phone">Número Telefónico:</div>
                        <input type="tel" class="form-control" id="phone" name="phone" required="required" placeholder="Ingrese un número de teléfono valido" value="<?= $_SESSION['response']['data']['phone'] ?? '525719159714'; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Domicilio:</label>
                        <textarea name="address" id="address" cols="5" rows="5" class="form-control" required="required" minlength="20"><?= $_SESSION['response']['data']['address'] ?? 'Cto. Rey Nezahualcóyotl Manzana 010, Benito Juárez, 57000 Cdad. Nezahualcóyotl, Méx.'; ?></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>