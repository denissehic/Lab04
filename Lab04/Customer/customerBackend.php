<title>Receipt</title>
<link rel="stylesheet" type="text/css" href="style.css">

<?php

$user = $_POST["email"];
$pass = $_POST["password"];

echo "Thank you " . $user . " p:(" . $pass . ") for your purchase. <br>";


$quan1 = $_POST["item1"];
$quan2 = $_POST["item2"];
$quan3 = $_POST["item3"];

$ship = $_POST["type"];

$shipP = 0;

if($ship == "Over night") {$shipP = 50;}
else if($ship == "Three day") {$shipP = 5;}

$price2 = $quan2*2;
$price3 = $quan3*500;

$totalC = $quan1 + $price2 + $price3 + $shipP;

echo "<table border=1 width=17%>";
  echo "<tr><div2>";
  echo "<td> </td>";
  echo "<td>Quantity</td>";
  echo "<td>Cost Per Item </td>";
  echo "<td>Subtotal</td>";
  echo "</div2></tr>";

  echo "<tr>";
  echo "<td>Bananas</td>";
  echo "<td>" . $quan1 . "</td>";
  echo "<td>$1</td>";
  echo "<td> $" . $quan1 .  " </td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Apples</td>";
  echo "<td>" . $quan2 . "</td>";
  echo "<td>$2</td>";
  echo "<td> $" . ($price2) .  "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>AK47s</td>";
  echo "<td>" . $quan3 . "</td>";
  echo "<td>$500</td>";
  echo "<td> $" . ($price3) .  "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Shipping</td>";
  echo "<td colspan=2>" . $ship . "</td>";
  echo "<td> $" . ($shipP) .  "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td colspan=3>Total Cost</td>";
  echo "<td> $" . $totalC . "</td>";
  echo "</tr>";

echo "</table>";
?>
