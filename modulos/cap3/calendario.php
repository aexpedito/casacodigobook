<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3 Casa Codigo: Calendario</title>
    </head>
    <body>
        <h1><?php echo date('d/m/Y') ?></h1>
        <table border='1'>
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sáb</th>                
            </tr>
            
            <?php calendario();?>
                        
        </table>
        
        <?php 
            function linha($semana)
            {
                echo "<tr>";
                for($i=0; $i<=6; $i++)
                {
                    if(isset($semana[$i]))
                    {
                        echo "<td>{$semana[$i]}</td>";
                    }
                    else
                    {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            
            function calendario()
            {
                $dia=1;
                $semana=array();
                
                while($dia<=31)
                {
                    array_push($semana,$dia);
                    if(count($semana)==7)
                    {
                        linha($semana);
                        $semana=array();
                    }
                    $dia++;
                }
                linha($semana);
            }
        ?>
    </body>
</html>
