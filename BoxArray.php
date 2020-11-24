<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>While Logic</title>
</head>
<body>
    <?php
    $BoxArray = array(
        "Small Box"=>array(12,10,2.5),
        "Medium Box"=>array(30,20,4),
        "Large Box"=>array(60,40,11,5)
    );
   
        foreach ($BoxArray as $Box=>$Size){
        echo $Box."has volume of ".$Size[0]*$Size[1]*$Size[2]."($Size[0]*$Size[1]*$Size[2])"."<br>";
    }
    ?>
</body>
</html>