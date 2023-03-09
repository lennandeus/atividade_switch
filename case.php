<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade do Dieiminho</title>
    </head>
    <body>
        <?php
            $brabo = 3;

            switch($brabo){
                case 1:
                case 2:
                    echo "Administração";
                break;
                case 3:
                    echo "Biomedicina";
                break;
                case 4:
                    echo "Design Gráfico";
                break;
                case 5:
                    echo "Física";
                break;
                case 6:
                echo "Jornalismo";
                break;
                case 7:
                case 8:
                case 9:
                    echo "Medicina";
                break;
                case 10:
                    echo "Relações Públicas";
                break;
                default:
                    echo "Código inválido";
                break;
            }    
         ?>
    </body>
</html>