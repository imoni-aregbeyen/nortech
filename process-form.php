<?php

// Get form data
$principal = $_POST['principal'];
$investor_amount = $_POST['investor_amount'];
$net_income = $_POST['net_income'];

// Calculate investor percentage
$investor_percentage = $investor_amount / ($principal * 0.01);

// Calculate dividend
$dividend = $net_income / 2;

// Calculate sharing formula
$sharing_formula = ($dividend * 0.01) * $investor_percentage;

// Output the values
echo "Principal: " . $principal . "<br>";
echo "Investor amount: " . $investor_amount . "<br>";
echo "Investor percentage: " . $investor_percentage . "<br>";
echo "Net income: " . $net_income . "<br>";
echo "Dividend: " . $dividend . "<br>";
echo "Sharing formula: " . $sharing_formula . "<br>";

?>
