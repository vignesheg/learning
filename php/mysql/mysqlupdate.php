<?php

require "mysqldbconn.php";

$sql="UPDATE studentlist SET sno=2 WHERE student_name='mithun'";
if(mysqli_query($conn,$sql)){
    echo "successfully updated";
}else{
    "not updated" .mysqli_error($conn);
}

?>