<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scales=1">

    <title>Parking</title>
    <link rel="stylesheet" href="body.css">
    <style>
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unit = $_POST["unit"];
    $floor = $_POST["floor"];
    $slot = $_POST["slot"];
    $brand = $_POST["brand"];
    $plate = $_POST["plate"];
}
?>
<div class="bg-image">
</div>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
</div>
</div>

<div>
    <div class="bd">
        <form action="t3.php" method="post">
            <div class="cent">  
            <h2>Hello</h2>
            <div>

            <p class="cent">Condo Room: <?php echo $unit; ?></p>
            <p class="cent">Parking Floor: <?php echo $floor; ?></p>
            <p class="cent">Parking Slot: <?php echo $slot; ?></p>
            <p class="cent">Car Brand: <?php echo $brand; ?></p>
            <p class="cent">Car Plate Number: <?php echo $plate; ?></p>
            
        </div>
    </div> 
        </form>
    </div>
</div>

</body>
</html>