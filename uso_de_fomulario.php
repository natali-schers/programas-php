<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

   <?php

   if(isset($_POST['num'])){
      $num = $_POST['num'];

      if($num > 0){
         echo "Valor Positivo";
      }elseif($num < 0){
         echo "Valor Negativo";
      }else{
         echo "Igual a Zero";
      }

   }

   ?>

   <form method="POST">
    <input type = "text" name ="num">
    <input type = "submit">
   </form>

</body>
</html> 
