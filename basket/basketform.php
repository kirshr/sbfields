<?php
if(isset($_GET['id']) && is_numeric($_GET['id']) ) {
    $id = $_GET['id'];
} 
include ('dbConfig.php');

if (isset($_POST['submit'])) {
    extract($_POST);
    $availablebasket = $_POST['basket']; 

    // validation goes here
    
    $update_sql = $db->prepare("UPDATE basket_available SET availablebasket = ? WHERE basket_id = 1");
    $update_sql->bind_param("s", $availablebasket, );

    $update_sql->execute();        

    if($update_sql->error) { 
            $validation = "Error: " . $update_sql->error;
    } 
    else { 
        $validation = "Basket Updated";            
    }
    $update_sql->close();    
}

?>

<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
    <?php if (isset($validation)): ?>
        <div class="validation"><?php echo $validation; ?></div>
    <?php endif; ?>

    <label for="basket">Number of Basket Available</label>
    <input type="number" id="basket" name="basket" value="<?php if (isset($availablebasket)) {
        echo $availablebasket;
    } ?>">

    <input type="submit" value="submit" name="submit">


</form>