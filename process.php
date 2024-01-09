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
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $scoops = $_POST['scoops'];
    $flavors = $_POST['flavor'];
    $cone = $_POST['cone'];
    $flavorString = implode(", ", $flavors);

    //print a summary
    echo "<p>$scoops scoops</p>";
    echo "<p> Flavor: $flavorString  </p>";
    echo "<p>$scoops scoops</p>";
    echo "<p>Cone: $cone </p>";
    ?>

</body>
</html>
