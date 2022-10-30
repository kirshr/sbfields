<?php
    include "./dbConfig.php";
    $get_all = "SELECT available FROM bookings";
    $get_all_result = mysqli_query($db, $get_all);
    $data = array();


    if ($get_all_result->num_rows > 0) {
        // output data of each row
        while($row = $get_all_result->fetch_assoc()) {
          foreach ($row as $date) {
            array_push($data, $date);
          }
        }

      } else {
        echo "0 results";
      }
      $db->close();
?>
<?php
  print_r($data);
  $count = count($data);
?> 
<script>
  let count = <?php echo $count ?>;
  let data = <?php echo json_encode($data) ?>;
  //iterate through each element in the data array
  for (let i = 0; i <= count; i++) {
    document.getElementsByClassName(data[i])[0].classList.add('selected');
    console.log(data[i]);
  }
</script>

    
