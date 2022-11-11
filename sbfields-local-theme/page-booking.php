<?php
/**
 *
 * @package SBFields
 */
?>

<?php
	include plugin_dir_path(__FILE__)."inc/dbConfig.php";
?>

<?php get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php echo do_shortcode('[greeting]') ?>
		</div>
    <?php  include plugin_dir_path(__FILE__). 'booking-form.php'; ?>
	</main><!-- #main -->

<?php

$get_all = "SELECT available FROM bookly";
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
$count = count($data);
?> 
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
	let count = <?php echo $count ?>;
	let data = <?php echo json_encode($data) ?>;
	//iterate through each element in the data array
	for (let i = 0; i <= count; i++) {
	document.getElementsByClassName(data[i])[0].classList.add('selected');
	}
</script>
<script>
	let body = document.querySelector('body');
	body.addEventListener('click', function(e) {
		let tgt = e.target;
		if (tgt.classList.contains('selected')) {
			modal.style.display = "block";
		}
	})
</script>

<?php
get_footer();
?>