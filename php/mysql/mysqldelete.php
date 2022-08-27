<?php

require "mysqldbconn.php";
 
$sql = "DELETE FROM studentlist WHERE id=5";

if(mysqli_query($conn , $sql)){
    echo "deleted successfully";
}else{
    echo "error".mysqli_error($conn);
}
?>