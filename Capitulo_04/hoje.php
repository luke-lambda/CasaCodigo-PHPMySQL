<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia <?php echo date('d/m/Y'); ?></title>
</head>
<body>
    <h1>
        Estamos em <?php echo date('Y'); ?> e hoje é dia
        <?php echo date('d/m'); ?>
    </h1>
    <p>
        Esta página foi gerada às <?php echo date('H'); ?>
        horas e <?php echo date('i'); ?> minutos.
    </p>
</body>
</html>