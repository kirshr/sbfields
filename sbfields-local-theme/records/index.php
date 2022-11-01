<?php 
$pageTitle = "User Records";
include ('inc/header.php');
echo "<h1>User Records</h1>";
echo '<a href="download.php">Download</a>';
if (isset($_GET['displayBy'])) {
	$displayBy = $_GET['displayBy'];
} else {
	// $displayBy = "";
}


if (isset($_GET['displayValue'])) {
	$displayValue = $_GET['displayValue'];
} else {
	// $displayValue = "";
}

$sql = "SELECT customer_id, customer_name, customer_phone, customer_email from customer_records";

if (isset($displayBy) && isset($displayValue)) 
{ 
	$sql .= " WHERE $displayBy = '$displayValue'";
}

$result = mysqli_query($conn, $sql);
if (!$result) 
{
	echo '<p>Bad query mysqli_error($conn)</p>';
}
else
{
	if (mysqli_num_rows($result) == 0) 
	{
		echo '<p>No results returned</p>';
	}
	else
	{
        ?>
        <table>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>

            </tr>
        <?php
		// echo "<tr class=\"user_table\">";
		while ($row = mysqli_fetch_assoc($result)) 
		{
			extract($row);
			?>
            <tr class="info">
                <td><input type="checkbox" id="<?php echo $customer_id; ?>" name="<?php echo $customer_name; ?>" value="<?php echo $customer_id; ?>"></td>
                <td><?php echo $customer_name; ?></td>
                <td><?php echo $customer_phone; ?></td>
                <td><?php echo $customer_email; ?></td>
                <!-- create a detail page for a single view of the CD - show all info -->
            </tr>
			<?php
		}
		// echo "</tr>";
        echo "</table>";
	}
}

?>