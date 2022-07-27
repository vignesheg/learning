<?php
  function  marks ($m1,$m2,$m3,$m4,$m5,$m6,$name){

    $tamil=$m1;
    $english = $m2;
    $chemistry =$m3;
    $physics = $m4;
    $maths = $m5;
    $biology = $m6 ;

    $total = $tamil + $english + $chemistry + $physics + $maths + $biology;
    echo "
    <style>
        th,td,tr{
            border : 2px solid red;
        }
        table{border-collapse:collapse;
               width: 300px;}
        th{background-color:aqua;}   
        .tot{background-color:aqua;}
    </style>    
    ";
    echo "<h1>$name</h1>";
    echo "<table>";
    echo "<tr><th>subject</th><th>marks</th></tr>";
    echo "<tr><td>Tamil :</td><td>".$tamil."</td></tr>";
    echo "<tr><td>English :</td><td>".$english."</td></tr>";
    echo "<tr><td>chemistry :</td><td>".$chemistry."</td></tr>";
    echo "<tr><td>physics :</td><td>".$physics."</td></tr>";
    echo "<tr><td>maths :</td><td>".$maths."</td></tr>";
    echo "<tr><td>Biology :</td><td>".$biology."</td></tr>";
    echo "<tr class=tot><td><b>total</b> :</td><td>".$total."</td></tr>";
  }
 
   

   marks(93, 78, 85, 85, 95, 95,"Vignesh 12th marks");
   ?>