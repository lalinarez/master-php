<?php

/**
 * Ejercicio 3. Crear un formulario con 2 entradas numéricas y 4 botones para realizar suma, resta, multiplicación y división
 */

$data = $_POST;
$result = 0;

if (count($data) > 0) {
    $first = $data['first'];
    $second = $data['second'];

    $result = match ($data['action']) {
        'sum' => ($first + $second),
        'subtract' => ($first - $second),
        'multiply' => ($first * $second),
        'split' => ($first / $second),
        default => 0
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <form action="/" method="post">
            <div class="row">
                <h1>Calculadora básica con HTML</h1>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="first" class="form-label">Primer Número:</label>
                        <input type="number" name="first" id="first" class="form-control" value="<?= $first ?? ''; ?>" required="required" autocomplete="off" autofocus="autofocus">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="second" class="form-label">Segundo Número:</label>
                        <input type="number" name="second" id="second" class="form-control" value="<?= $second ?? ''; ?>" required="required" autocomplete="off">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Resultado:</label>
                        <input type="text" readonly class="form-control-plaintext" value="<?= $result ?? 0; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" value="sum" name="action" class="btn btn-outline-primary">Suma +</button>
                    <button type="submit" value="subtract" name="action" class="btn btn-outline-warning">Resta -</button>
                    <button type="submit" value="multiply" name="action" class="btn btn-outline-danger">Multiplicación *</button>
                    <button type="submit" value="split" name="action" class="btn btn-outline-success">División /</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>