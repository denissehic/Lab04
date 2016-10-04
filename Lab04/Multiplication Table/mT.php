<?php

echo "<table border=1 width=25%>";

for ($i = 1; $i <= 101; $i++ ) {
  $k=1;
  echo "<tr>";
   if($i==1)
	echo "<td> </td>";
   else{
   $k=$i-1;
   echo "<td>$k</td>";
   }
    echo "<td>".$k ."</td>";
    for ( $j = 2; $j <= 100; $j++ ) {
            echo "<td>".$k * $j."</td>";
        }
    echo "</tr>";
}
echo "</table>";
?>
