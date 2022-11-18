<?php 
include ('../inc/dbConfig.php');



$sql = "SELECT * FROM basket_available";

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $basket);
$stmt->fetch();
$stmt->close();

echo "$basket";
?>

<script>
    let test = <?php echo json_encode($basket); ?>
</script>