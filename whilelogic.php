<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>While Logic</title>
</head>
<body>
<?php
$Count = 0;
while ($Count < 100) {
$Numbers[] = $Count;
++$Count;
}
foreach ($Numbers as $CurNum) 
echo "<p>$CurNum<p>";
    
?>
</body>
</html>