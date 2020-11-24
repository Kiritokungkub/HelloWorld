<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>While Logic</title>
</head>
<body>
    <h1>Gosselin Automotive</h1>
    <h2>Top Five Salespeople in January </h2>
    <hr>
    <?php
        $Salespeople = array(
            "Hiroshi Morinaga" => "57",
            "Judith Stein" => "44",
            "Jose Martinea" => "26",
            "Tyrone Winters" => "22",
            "Raja Singh" => "21"
            );
        foreach($Salespeople as $Name =>$CarSales){
            echo $Name." : ".$CarSales." cars<br>";
        }
    ?>
</body>
</html>