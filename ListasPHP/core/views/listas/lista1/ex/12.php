<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
            N: <input type="number" name="n"/>
            <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["n"])){
            $n = $_POST["n"];
            if($n >= 1000){
                die();
            }            
            
            $multi = $n;
            $conta = 0;

            for ($i = $n; $i < 1000; $i++) {
                if(($multi % $n) == 0) {
                    $conta++;
                    $multi++;
                }else{
                    $multi++;
                }
            }
        
            echo "$n tem $conta múltiplos ate 1000";
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>