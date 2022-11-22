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
			<div class="inner-container booking">
				<div class="booking-info">
					<h2>Booking Information</h2>
						<ul>
							<li>Appointments Only - No Drop In's</li>
							<li>Only one week of appointments is open at a time</li>
							<li>New appointments will open if/when more strawberries are avaliable</li>
							<li>If there are no appointments avaliable we have a waitlist avaliable to join via the next page. We work throughthis list on a first come first serve basis</li>
							<div class="basket">
								<img src="<?php bloginfo('template_directory'); ?>/img/picnic-basket.png" alt="<?php the_title (); ?>">
								<li> are provided free of charge, you are welcome to bring your own</li>
							</div>
							<div class="basket">
								<img src="<?php bloginfo('template_directory'); ?>/img/picnic-basket.png" alt="<?php the_title (); ?>">
								<li> = approx. 5lbs of berries</li>
							</div>
							<li>Please estimate how many baskets you thin you will pick for scheduling</li>
							<li>Price is $5 per lb</li>
							<li>We accept cash or e-transfer only</li>
							<li>Bakstes will be weighed at the  end of your visit</li>
						</ul>
				</div>
				<div>
					<?php echo do_shortcode('[greeting]') ?>
				</div>
			</div>
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