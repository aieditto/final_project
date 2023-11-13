<?php
$servername="localhost";
$username="root";
$password="";
$con = new mysqli ($servername,$username,$password);
if(!$con)
{
    echo "Failed";
}
$databases="customer_information";
$database_name= "create database IF NOT EXISTS $databases";
if($con->query($database_name)==true)
{
    echo "";
}
else
{
    echo "Failed to Registered";
}
$con->select_db($databases);
$table="Customer_Details";
$data_table="create table IF NOT EXISTS Customer_Details (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR (40),
                Gender VARCHAR (10),
                Size VARCHAR(10),
                Code VARCHAR(10),
                Email VARCHAR(50),
                Address VARCHAR(255)
                )";
if($con->query($data_table)==true)
{           
    echo "";
}
else
{
    echo "Failed to Registered";
}
$name = $_POST['name'];
$gender = $_POST['gender'];
$size = $_POST['size'];
$code = $_POST['code'];
$email = $_POST['email'];
$address = $_POST['address'];


$insert_table= "INSERT INTO Customer_Details(name, gender, size, code, email, address)
                VALUES('$name', '$gender', '$size', '$code', '$email', '$address')";

if ($con->query($insert_table) == TRUE) {
    echo "<h1>Your order is placed on</h1>";
} else {
    echo "Failed To Registerd";
}

echo "<h2>Here Your Details</h2>";
echo "<p>Name: $name</p>";
echo "<p>Gender: $gender</p>";
echo "<p>Size: $size</p>";
echo "<p>Code: $code</p>";
echo "<p>Email: $email</p>";
echo "<p>Address: $address</p>";


$con->close();
?>
