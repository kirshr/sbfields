<?php 
include "inc/config.php";
include "inc/connect.php";

// Fetch records from database 


$query = "SELECT * FROM customer_records WHERE customer_id"; 

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){ 
    $delimiter = ","; 
    $filename = "customers-data_" . date('Y-m-d') . ".csv"; 
        
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
        
    // Set column headers 
    $fields = array('NAME', 'PHONE', 'EMAIL'); 
    fputcsv($f, $fields, $delimiter); 
        
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $lineData = array($row['customer_name'], $row['customer_phone'], $row['customer_email']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
        
    // Move back to beginning of file 
    fseek($f, 0); 
        
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
        
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 

?>

