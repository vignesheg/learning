<html>
    <head></head>
    <body>
       <?php
         $x = date("H");
         if($x < "10") { echo "have a good morning";}
         elseif($x < "20"){echo "have a good day";}
         else{ echo "have a good night ";}
        ?> 
    </body>
</html>    