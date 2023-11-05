
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar">
      <span class="navbarSp">Vishal Handoo</span>
    </nav>
    <div class="form mb-2">
        <h2>BMI Calculator</h2>
    </div>

    <form class="form" method="GET">
        <div class="form-group">
            <label class="level" for="weight">Weight in (kg):</label>
            <input class="input" type="text" name="weight" id="weight" placeholder="50">
        </div><br>
        <div class="form-group">
            <label class="level" for="height">Height in (cm): </label>
            <input class="input" type="text" name="height" id="height" placeholder="1 foot = 30.48cm">
        </div><br>
        <div class="form-group">
            <input class="button b1" type="submit" name="calculate" value="Calculate">
            <input class="button" type="submit" name="clear" value="Clear">
        </div>
    </form>

    <div class="form mt-2 <?php if(isset($_GET['clear'])) { echo 'hide'; }  ?>">
        <?php
        if (isset($_GET['calculate'])) {
            $weight = $_GET['weight']; 
            $height = $_GET['height']; 
            if(empty($weight) && empty($height)) {
                echo '<span class="error-text">Please inset both value in Number </span>';
            }else {

            function calculateBMI($weight,$height) {
                $calculateBMI = ($weight/($height*$height)*10000);
                return $calculateBMI;
                }

        $calculateBMI = calculateBMI($weight,$height);
        if ($calculateBMI <= 18.5) {
            $output = "Under Weight";
            } else if ($calculateBMI > 18.5 AND $calculateBMI<=25 ) {
                $output = "Normal Weight";
            } else if ($calculateBMI > 26 AND $calculateBMI<=30) {
                $output = "Over Weight";
            } else if ($calculateBMI > 31 AND $calculateBMI<=40) {
                $output = "OBESE";
            } else {
                $output = "Invalid";
            }
            echo "Your Weight : " . $weight . "</br> Your height : " .$height ;
            echo "</br></br>Your BMI is : " . $calculateBMI . "</br> And you are : " .$output ;
        }
    }

        ?>
    </div>

</body>
</html>
