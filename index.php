<?php
require 'connect.inc.php';
?>
<form action="index.php" method="GET">
    <select name="uh" value="uh" id="uh">
        <option value="u">UnHealthy</option>
        <option value="h">Healthy</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>



<?php

if(isset($_GET['uh'])&&!empty($_GET['uh'])) {
    
     $uh = strtolower($_GET['uh']);
    
    
        $query = "SELECT `food`, `calories`, `id` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id`";

        if($query_run = mysql_query($query)) {

            while($query_row = mysql_fetch_assoc($query_run)) {
                $food = $query_row['food'];
                $calories = $query_row['calories'];
                $id = $query_row['id'];
              

                echo   $food.' has '.$calories.'  calories.<br>';
               
                
            }

        }
   
}
?>