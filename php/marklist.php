<?php
require "data.php";
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
    
  </tr>  
  <!<?php 
  $i=1;
  foreach($marks_1 as $key => $value){

  ?>
  <tr>
  <td><?php echo $i++ ?></td>
    <td><?php echo $value["name"];?></td>
    <td><?php echo $key?></td>
    <td><?php echo $value["marks"][0];?></td>
    <td><?php echo $value["marks"][1];?></td>
    <td><?php echo $value["marks"][2];?></td>
    <td><?php echo $value["marks"][3];?></td>
    <td><?php echo $value["marks"][4];?></td>
    <td><?php echo $value["marks"][5];?></td>
  </tr>
<?php }?>
<?php foreach($marks_3 as $key =>$value){?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $value["name"];?></td>
    <td><?php echo $key?></td>
    <td><?php echo $value["english"];?></td>
    <td><?php echo $value["maths"];?></td>
    <td><?php echo $value["tamil"];?></td>
    <td><?php echo $value["physics"];?></td>
    <td><?php echo $value["chemistry"];?></td>
    <td><?php echo $value["biology"];?></td>
<?php } ?>
  </tr>
</table>
</body>
</html>