<?php
$hamburger = 4.95;
$Twohamburger = 2*4.95;

$chocolate = 1.95;
$cola = 0.85;
$total=2*$hamburger+$chocolate+$cola;
$taxrate=((2*$hamburger)+$chocolate+$cola)*7.5/100;
$pretax=((2*$hamburger)+$chocolate+$cola)*16/100;
$taxtotal=$taxrate+$pretax;




echo "<table border=1 cellpadding= 10>";
echo "<tr><td colspan=4>Bill</td></tr>";
echo "<tr><td>Name</td><td>Price</td><td>Qty</td><td>Cost</td></tr>";
echo "<tr><td>Hamburger</td><td>$hamburger</td><td>2</td><td>$Twohamburger</td></tr>";
echo "<tr><td>Chocolate</td><td>$chocolate</td><td>1</td><td>$chocolate</td></tr>";
echo "<tr><td>Cola</td><td>$cola</td><td>1</td><td>$cola</td></tr>";
echo "<tr><td colspan=3>Total item Cost</td><td>$total</td></tr>";
echo "<tr><td colspan=3>Sale Tax cost</td><td>$$taxrate</td></tr>";
echo "<tr><td colspan=3>Pre-tax  Cost</td><td>$pretax</td></tr>";
echo "<tr><td colspan=3>Tax Total</td><td>$taxtotal</td></tr>";

echo "</table>";
?>