<?php
$n=$_GET["num"];
var_dump($_GET);
echo "<br>Number: ".$_GET["num"]."<br>";
echo "<br>Max: ". $_GET["max"]."<br>";
echo "<br>Min: ". $_GET["min"]."<br>";
for($x=1; $x<=10;$x++){

   echo $x;
   echo "<br>";
}
for ($y=1;$y<=$_GET["num"] ;$y++){
    
    echo $y;
    echo "<br>";

}
/*loop 1:entry $x=1 1<10 True 
loop 2:increment $x=2 2<10 TRUE
loop 3:increment $x=3  3<10 TRUE
loop 4:increment $x=4  4<10 TRUE
loop 5:increment $x=5 5<10 TRUE
loop 6:increment $x=6 6<10 True
lopp 7:increment $x=7 7<10 True
loop 8:increment $x=8 8<10 TRUE
loop 9:increment $x=9 9<10 true
loop 10:increment $x=10 10=10 true
lopp 11:increment $x=11 11>10 false
/*for($y=0;$y<=30;$y++){
}*/

?>