<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usando php</title>
    <link rel="stylesheet" href="css/prac2.css">
</head>
<body>
    <h1>estamos usando php y html </h1>
    <?php
    for ($i=1;$i<10;$i++){
        echo '<input type="text" name="txtc'.$i.'" id="txtc'.$i.'" placeholder="casilla numero' .$i . '"><br>';

     }
    ?>
</body>
</html>

