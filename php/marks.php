<?php
//var_dump($_GET);
include "data.php";

$rollno=$_GET["rollno"];
$name=$students[$rollno];

echo "<br>name:".$name."<br>rollno:".$rollno;

if($name=="vignesh"||$rollno=="5288913"){
echo "<h2>vignesh</h2>";
echo "<table>";
echo "<tr><th>subject</th><th>Marks</th></tr>";
for($x = 0; $x < $length; $x++){
  echo "<tr><td>".$subjects[$x]."</td><td>".$vignesh[$x]."</td></tr>";
}
echo "</table>";
}
if($name=="ashwin"||$rollno=="656565"){
echo "<h2>ashwin</h2>";
echo "<table>";
echo "<tr><th>subject</th><th>Marks</th></tr>";
for($x = 0; $x < $length; $x++){
  echo "<tr><td>".$subjects[$x]."</td><td>".$ashwin[$x]."</td></tr>";
}

echo "</table>";
}
if($name=="sanjay"||$rollno=="090909"){
echo "<h2>sanjay</h2>";
echo "<table>";
echo "<tr><th>subject</th><th>Marks</th></tr>";
for($x = 0; $x < $length; $x++){
  echo "<tr><td>".$subjects[$x]."</td><td>".$sanjay[$x]."</td></tr>";
}
echo "</table>";
}
if($name=="mithun"||$rollno=="767676"){
echo "<h2>mithun</h2>";
echo "<table>";
echo "<tr><th>subject</th><th>Marks</th></tr>";
for($x = 0; $x < $length; $x++){
  echo "<tr><td>".$subjects[$x]."</td><td>".$mithun[$x]."</td></tr>";
}
echo "</table>";
}
?>
<html>

  <body>

    <table>
      <tr>
        <th>sno</th>
        <th>Name</th>
        <th>rollno</th>
        <th>english</th>
        <th>tamil</th>
        <th>maths</th>
        <th>physics</th>
        <th>chemistry</th>
        <th>biology</th>
        <th>Total No</th>
      </tr>  
      
      <tr>
        <td>1</td>
        <td><?php echo $students["5288913"];?></td>
        <td>5388913</td>
        <td><?php echo $vignesh[0];?></td>
        <td><?php echo $vignesh[1];?></td>
        <td><?php echo $vignesh[2];?></td>
        <td><?php echo $vignesh[3];?></td>
        <td><?php echo $vignesh[4];?></td>
        <td><?php echo $vignesh[5];?></td>
        <td><?php echo array_sum($vignesh);?></td>
      </tr>
      <tr>
         <td>2</td>
         <td><?php echo $students["656565"];?></td>
         <td>656565</td>
         <td><?php echo $ashwin[0]?> </td>
         <td><?php echo $ashwin[1]?> </td>
         <td><?php echo $ashwin[2]?> </td>
         <td><?php echo $ashwin[3]?> </td>
         <td><?php echo $ashwin[4]?> </td>
         <td><?php echo $ashwin[5]?> </td>
         <td><?php echo array_sum($ashwin)?>
</tr>
<tr>
         <td>1</td>
         <td><?php echo $students["090909"];?></td>
         <td>5288913</td>
         <td><?php echo $sanjay[0]?> </td>
         <td><?php echo $sanjay[1]?> </td>
         <td><?php echo $sanjay[2]?> </td>
         <td><?php echo $sanjay[3]?> </td>
         <td><?php echo $sanjay[4]?> </td>
         <td><?php echo $sanjay[5]?> </td>
         <td><?php echo array_sum($sanjay)?>
</tr>
<tr>
         <td>1</td>
         <td><?php echo $students["767676"];?></td>
         <td>5288913</td>
         <td><?php echo $mithun[0]?> </td>
         <td><?php echo $mithun[1]?> </td>
         <td><?php echo $mithun[2]?> </td>
         <td><?php echo $mithun[3]?> </td>
         <td><?php echo $mithun[4]?> </td>
         <td><?php echo $mithun[5]?> </td>
         <td><?php echo array_sum($mithun)?>
</tr>
    </table>
  </body>
</html>  
</table>