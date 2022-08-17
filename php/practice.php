<?php
   require "data.php"
  ?>
  
<html>
    <head></head>
    <body>

        <table>
            <tr>
                <td>S.no</td>
                <td>students</td>
                <td>roll no </td>
                <td>english</td>
                <td>tamil</td>
                <td>Maths</td>
                <td>physics</td>
                <td>chemistry</td>
            </tr>
            <tr>
            <?php 
            $i=1;
            foreach($marks_1 as $key => $value){ ?>
                <td><?php echo $i++ ?> </td>
                <td><?php echo $value["name"] ;?></td>
                <td><?php echo $key ?></td>
                <td><?php echo $value["marks"][0]; ?></td>
                <td><?php echo $value["marks"][1]; ?></td>
                <td><?php echo $value["marks"][2]; ?></td>
                <td><?php echo $value["marks"][3]; ?></td>
                <td><?php echo $value["marks"][4]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>