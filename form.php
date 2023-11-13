<?php
$con = new mysqli("localhost", "root", "", "");
if(!$con)
{
    echo "Database Not Connected";
}
$name=$_POST['name'];
$gender=$_POST['gender'];
$size=$_POST['size'];
$code=$_POST['code'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql ="insert into ";
?>

<?php
$con = new mysqli("localhost", "root", "", "inc");
if(!$con)
{
    echo "fail to connect";
}
$sql = "delete from student_info where id=15";
if($con->query($sql)==true)
{
    echo "data has been deleted successfully";
}
else 
{
    echo "fail to delete";
}