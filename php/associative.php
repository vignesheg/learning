<?php
//var_dump($_GET);
$students["5288913"]="vignesh";
$students["5288913"]="vignesh";
$students["5288913"]="sanjay";
$students["5288913"]="mithun";
$name=$students[$rollno];
$rollno=$_GET["rollno"];
echo "<br>name:".$name." <br>rollno:".$rollno;
$subjects=array("english","tamil","maths","biology","chemistry","physics");
$vignesh[0]=78;
$vignesh[1]=93;
$vignesh[2]=95;
$vignesh[3]=95;
$vignesh[4]=85;
$vignesh[5]=85;
$length=count($vignesh);
$ashwin=array("95" ,"90","90","90","90","90");
$sanjay=array("92","95","97","97","95","98");
$mithun=array("93","97","96","94","95","96");
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
