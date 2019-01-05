<?php // create variable names
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $tireqty=htmlspecialchars($tireqty);
    $oilqty=htmlspecialchars($oilqty);
    $sparkqty=htmlspecialchars($sparkqty);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bob's Auto Parts | Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php 
    echo "tires: $tireqty <br/>";
    echo "oil: $oilqty <br/>";
    echo "spark: $sparkqty <br/>";

    echo '<p>Order processed at ';
    echo date('H:i, jS F Y');
    echo '</p>';
    ?> 
</body>
</html>