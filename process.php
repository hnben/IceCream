<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Summary</title>
</head>
<body>
    <h1>Thank you for your order</h1>

    <?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Define constants
    define('PRICE_PER_SCOOP', 2.50);
    define('TAX', .11);

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    //scoops validation
    if (!empty($_POST['scoops'])){
        $scoops = $_POST['scoops'];
    }
    else {
        echo "<p> Enter scoops! </p>";
        return;
    }

    //flavor validation
    if (isset($_POST['flavor'])){
        $flavors = $_POST['flavor'];
    }
    else{
        echo "<p> Please select at least one flavor </p>";
        return;
    }

    //cones validation
    if (!empty($_POST['cone'])){
        $cones = $_POST['cone'];
    }
    else {
        echo "<p> Enter cones! </p>";
        return;
    }

    $flavorString = implode(", ", $flavors);

    //print a summary
    echo "<p>$scoops scoops</p>";
    echo "<p> Flavor: $flavorString  </p>";
    echo "<p>$scoops scoops</p>";
    echo "<p>Cone: $cones </p>";

    $subtotal = PRICE_PER_SCOOP * $scoops;
    $tax = $subtotal * TAX;
    $total = $subtotal + $tax;

    echo "<p> subtotal: $subtotal </p>";
    echo "<p> tax: $tax </p>";
    echo "<p> total: $total </p>";

    ?>
</body>
</html>
