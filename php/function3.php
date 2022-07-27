<?php

function subject($name,$mark){
  
  echo "<tr>";
  echo "<td>";
  echo "$name";
  echo "</td>";
  echo "<td>";
  echo $mark;
  echo "</td>";
  echo "</tr>";
}
?>

<html>
    <head>
        <style>
        table{
           border-collapse:collapse;

        }

        td,th{
             border: 1px solid red;
        }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>subject</th>
                <th>Marks</th>
            </tr>
            
            <?php
              subject("english",80);
              echo "<BR>";
              subject("tamil",80);
              echo "<br>";
              subject("maths",80);
              echo "<br>";  
              subject ("chemistry",70);
              echo "<br>" ; 
              subject ("physics",70);
              echo "<br>"  ;
              subject ("biology",70);            
            ?>
            
        </table>
    </body>
</html>    