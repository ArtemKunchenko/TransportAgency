<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency</title>
</head>

<body>
    <h1>Transport agency</h1>
    <?php
    require_once "transportAgency.php";

    $agency = new TransportAgency();
    $agency->addCity("Київ", "large");
    $agency->addCity("Харків", "large");
    $agency->addCity("Львів", "medium");

    $agency->createOrder(100, "Київ", "Харків", "air");
    $agency->createOrder(50, "Львів", "Київ", "rail");

    $agency->reportIncome();

    ?>
</body>

</html>