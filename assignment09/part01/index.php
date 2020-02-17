<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>
<?php
$weight = $_POST['weight_1'];
$height = $_POST['height_1'];
$BMI= ($weight/($height * $height)) * 703;
    
     //formula for calculation BMI;
     //BMI = (Weight in Pounds / (Height in inches * Height in inches)) * 703
     //Source: http:// www.bmi-calculator.net/bmi-formula.php -->
    ?>
    <h1> BMI calculation </h1>
<p id="output-here"> your BMI is<?php echo $BMI; ?> ,which is :
<?php

if($BMI <18){
    echo "underweight";
}else if ($BMI >30){
    echo "obese";
}else {echo "normal";}
?>
</p>

</body>

