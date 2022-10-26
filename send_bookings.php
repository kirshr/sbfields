<?php
    include "./dbConfig.php";
    $data = $_POST['data'];
    //prepared statment
    $add_date = $db->prepare("INSERT INTO bookings (available) VALUES (?);");
    for ($i = 0; $i < count($data); $i++) {
        //echo $data[$i];
        //insert into database
        $add_date->bind_param('s', $data[$i]);
        $add_date->execute();
        if($add_date-> error) {
			$message = "Error: " . $add_date->error;
		}
		else {
			$message = "<h2>ADDED artist</h2>";
		}
    }
    echo $message;

?>
<!-- `
    1. Put the data in a php array
    2. Create a function that goes through each item of the array, anf if 
    3. 


[8Mon October 23, 9....,.....]

if (this class exists, $array[i] ) {
    ....addClass.toggle(".selectd").

    append()
}


 -->