<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>While Logic</title>
</head>
<body>
    <h1>Winning Number</h1>
    <?php
      /*for($i=0;$i<5;$i++){
      echo(rand(1,100))."<br>";
      }*/
      $numbers = range(1,100);
      shuffle($numbers);
      
      $number = array_slice($numbers,95);
      foreach($number as $value){
          echo $value."<br>";
      }
    ?>  
</body>
</html>