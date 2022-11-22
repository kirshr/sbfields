<?php 
include ('inc/dbConfig.php');
$first_name=$_POST['firstName'];
$last_name=$_POST['lastName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$basket=$_POST['basket'];

$insert_sql = "INSERT INTO customer_records (first_name, last_name, customer_phone, customer_email, booking_date, basket)VALUES ('$first_name', '$last_name',  '$phone', '$email', '$date', '$basket')";

echo $insert_sql;
$insert_res = $db->query($insert_sql);
if($db->insert_id)
{
    $validation = "Inserted";
}
else {
    $validation = $db->error;
}

?>