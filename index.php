<?php

$con = new mysql('mysql_db','root','root','mysql');

if($con){
    echo "Connected !!";
}