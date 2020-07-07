<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo horario(); ?></title>
</head>
<body>
    <h1>
        Olá, agora são <?php echo date('H'); ?> horas.
    </h1>
    <p>
        <?php echo horario(); ?>
    </p>
</body>
</html>

<?php
    function horario()
    {
        $frase = '';

        if (date('G') > 6 && date('G') < 13) {
            $frase = "Bom dia.";
        } elseif (date('G') > 13 && date('G') < 19) {
            $frase = "Boa tarde.";
        } else {
            $frase = "Boa noite.";
        }

        return $frase;
    }
?>