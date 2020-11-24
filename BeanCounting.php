<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bean Counting</title>
</head>
<body>
 <?php
  function countBs($word){
      $count = 0;
      for($i = 0;$i < strlen($word); $i++){
          if($word[$i] == "B"){
              $count++;
          }
      }
      return $count;
   }
  function countChar($word,$ch){
      $count = 0;
      for($i = 0; $i < strlen($word); $i++){
          if($word[$i] == $ch){
              $count++;
          }
      }
      return $count;
  }

  echo "Output of the countBs(\"BBC\") function is ".countBs(" BBC");
  echo "<br>";
  echo "Output of the countChar('kakkerlak','k') function is ".countChar('kakkerlak','k');
  ?>
</body>
</html>