<table border="1">
    <?php echo calendario(); ?>
</table>

<?php
    function linha($semana)
    {
        $linha = "<tr>";

        for ($i=0; $i <= 6; $i++) {
            if (array_key_exists($i, $semana)) {
                $linha .= "<td>{$semana[$i]}</td>";
            } else {
                $linha .= "<td></td>";
            }
        }

        $linha .= "</tr>";

        return $linha;
    }

    function titulo()
    {
        return "
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sáb</th>
            </tr>
        ";
    }

    function calendario()
    {
        $calendario = titulo();
        $dia = 1;
        $semana = [];

        while ($dia <= 31) {
            if ($dia == date('j')) {
                array_push($semana, "<strong>{$dia}</strong>");
            } else {
                array_push($semana, $dia);
            }

            if (count($semana) == 7) {
                $calendario .= linha($semana);
                $semana = [];
            }

            $dia++;
        
        }

        $calendario .= linha($semana);

        return $calendario;
    }
?>
