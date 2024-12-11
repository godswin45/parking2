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
$unitErr ="";

if (isset($_POST['submit'])) {
    $unit = $_POST['unit'];

    if (empty($unit)) {
        $unitErr = "Unit is required";
    }

  
    if (empty($unitErr)) {
        
        header("Location: t2.php");
        exit();
    }
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
        <form action="t3.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
            <center><h2>Hello</h2></center>
            <select class="from-select-mb-3" name="unit">
                <option selected name="unit"></option>
                <option value="Unit R1">Unit R1</option>
                <option value="Unit R2">Unit R2</option>
                <option value="Unit R3">Unit R3</option>
                <option value="Unit R4">Unit R4</option>
                <option value="Unit R5">Unit R5</option>
                <option value="Unit R6">Unit R6</option>
                <option value="Unit R7">Unit R7</option>
                <option value="Unit R8">Unit R8</option>
                <option value="Unit R9">Unit R9</option>
                <option value="Unit R10">Unit R10</option>
                <option value="Unit R11">Unit R11</option>
                <option value="Unit R12">Unit R12</option>
                <option value="Unit R13">Unit R13</option>
                <option value="Unit R14">Unit R14</option>
                <option value="Unit R15">Unit R15</option>
                <span style="color: red;" class="error"><?php echo $unitErr; ?></span><br>
            </select><br>

            <select class="from-select-mb-3" name="floor">
              <option selected>Parking Floor</option>
              <option value="1st floor">1st floor</option>
              <option value="2nd floor">2nd floor</option>
              
          </select><br>

            <select class="from-select-mb-3" name="slot">
                <option selected>select parking slot</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="B3">B3</option>
                <option value="B4">B4</option>
                <option value="B5">B5</option>
                <option value="B6">B6</option>
                <option value="B7">B7</option>
                <option value="B8">B8</option>
                <option value="B9">B9</option>
                <option value="B10">B10</option>
                <option value="B11">B11</option>
                <option value="B12">B12</option>
                <option value="B13">B13</option>
                <option value="B14">B14</option>
                <option value="B15">B15</option>
                <option value="B16">B16</option>
                <option value="B17">B17</option>
                <option value="B18">B18</option>
                <option value="B19">B19</option>
                <option value="B20">B20</option>
            </select><br>

            <select class="from-select-mb-3" name="brand">
                <option selected>Brand</option>
                <option value="yamaha">Yamaha</option>
                <option value="honda">Honda</option>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="ford">Ford</option>
                <option value="toyota">Toyota</option>
            </select><br>

            
              <input id="plate" type="text" name="plate" placeholder="Enter Plate Number">
                      
      
            <div class="sub">
              <input class="button button1" type="submit" name="submit" value=Submit>
            </div>
        </form>
    </div>
</div>

</body>
</html>