<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>

    <?php
    if(isset($_POST["num"])){
        echo $_POST["num"];
        $num = $_POST["num"];

        if($num % 2 == 0){
            echo " - número par";
        }else{
            echo " - número ímpar";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="num" />
        <input type="submit">
    </form>

</body>
</html>
