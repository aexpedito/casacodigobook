<!DOCTYPE html>

<?php session_start(); ?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type='text' name='nome'/>
                </label>
                <input type='submit' value='Cadastrar'/>
            </fieldset>
        </form>

        <?php
//            if(isset($_GET['nome']))
//            {
//                echo "NOme informado: " .$_GET['nome'];
//            }
//        
        ?>

        <?php
            if(isset($_GET['nome']))
            {
                $_SESSION['lista_tarefas'][]=$_GET['nome'];
            }

            $lista_tarefas=array();

            if(isset($_SESSION['lista_tarefas']))
            {
                $lista_tarefas=$_SESSION['lista_tarefas'];
            }
        ?>

        <table>
            <tr>
                <th>Tarefas</th>
            </tr>

            <?php foreach ($lista_tarefas as $tarefa): ?>
                <tr>
                    <td><?php echo $tarefa; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
