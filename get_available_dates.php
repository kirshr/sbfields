<?php
    include "./dbConfig.php";
    $get_all = "SELECT available FROM bookings";
    $get_all_result = mysqli_query($db, $get_all);

    if ($get_all_result->num_rows > 0) {
        // output data of each row
        while($row = $get_all_result->fetch_assoc()) {
          $dates = [$row["available"]];
        foreach ($dates as $date) {
            $available = $date;
        }
        }
      } else {
        echo "0 results";
      }
      $db->close();
?>

<script>
    jQuery('div').hasClass(<?php  $date ?>) {
        console.log('found class');
    }



</script>

    
