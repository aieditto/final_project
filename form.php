<?php
$servername="localhost";
$username="root";
$password="";
$con= new mysqli($servername,$username,$password);
if(!$con)
{
    echo "Not Connected";
}
else
{
    echo "Connected";
}
$con->close();
?>