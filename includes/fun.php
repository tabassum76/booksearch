<?php 
function confirm($result){
    global $con;
    if(!$result){
    die("query failed". mysqli_error($con));
            
        }
    }
?>