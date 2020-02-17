<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>
<?php
$weight = $'weight_1';
$height = $'height_1';
$BMI= ($weight/($height * $height)) * 703;
    
<h1>Health Checky - BMI Calculator</h1>
    <!-- Source: http://bmi-calculator.net/bmi-formula.php -->
    ?>
<p> id="output-here" your BMI is<?php echo $BMI; ?> ,which is considered:
<?php

if($BMI <18){
    echo "underweight";
}else if ($BMI >30){
    echo "obese";
}else {echo "normal";}
?>
</p>

</body>

