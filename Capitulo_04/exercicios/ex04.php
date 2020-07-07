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

    function corDia($semana, $dia)
    {
        $cor = null;

        if (count($semana) == 0) {
            $cor = "<span style=\"color:red;\">{$dia}</span>";
        } elseif (count($semana) == 6) {
            $cor = "<strong>{$dia}</strong>";
        } else {
            $cor = null;
        }

        return $cor;
    }

    function calendario()
    {
        $calendario = titulo();
        $dia = 1;
        $diaCor = null;
        $semana = [];

        while ($dia <= 31) {
            $diaCor = corDia($semana, $dia);

            if ($dia == date('j')) {
                if (isset($diaCor)) {
                    array_push($semana, $diaCor);
                } else {         
                    array_push($semana, "<strong>{$dia}</strong>");
                }
            } else {
                if (isset($diaCor)) {
                    array_push($semana, $diaCor);
                } else {
                    array_push($semana, $dia);
                }
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
