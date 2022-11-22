<?php
/**
 * This is the main homepage template
 *
 * @package SBFields
 */
?>

<?php
    get_header();
?>
    <main id="primary" class="site-main">
    <div class="banner">
        <div>
            <h1>Welcome To Strawberry Fields</h1>
        </div>
        <div>
            <a href="#" class="obj-link obj-scroll-to">
                <span class="obj-i-arrow"></span>
            </a>
        </div>
    </div>
        <div class="container">
            <div class="inner-container">
                <div class="home-info">
                    <div> 
                        <h2>Strawberry U-Pick!</h2>
                        <h3>Located in Southwest Edmonton, Alberta</h3>
                            <p>Strawberry Fields is a family run, pesticide free, Strawberry U-Pick farm located in Southwest Edmonton.</p> 
                            <p>If you have booked your appointment, see our map for specific instructions.
                            <p>Picking strawberries is by APPOINTMENT ONLY</p>
                            <a href="<?php echo esc_url(__('https://strawberryfields.web.dmitcapstone.ca/contact/')); ?>">Directions</a>
                            <img src="<?php bloginfo('template_directory'); ?>/img/field.webp" alt="<?php the_title (); ?>">
                    </div>
                    <div>
                        <h2>Pricing is $5/lb</h2>
                        <h3>Our large baskets hold about $25 of strawberries (~ 5lbs of berries)</h3>
                            <p>We provide free baskets but you may bring your own</p>
                            <p>We weigh the berries at the end of your picking to determine the price</p>
                            <p>When booking an appointment we ask for you to estimate how many baskets you would like to pick.</p>
                            <a href="<?php echo esc_url(__('https://strawberryfields.web.dmitcapstone.ca/booking/')); ?>">More Info</a>
                            <img src="<?php bloginfo('template_directory'); ?>/img/sb.webp" alt="<?php the_title (); ?>">
                    </div>
                    <div>
                        <h2>Book a Picking Time</h2>
                        <h3>By Appointment Only - No drop in's</h3>
                        <p>Appointments will open up as soon as we have enough strawberries</p>
                        <p>If there are no appointment times it means that this weeks appointments are currently full. </p>
                        <p>We only open a weeks worth of appointments at a time</p>
                        <a href="<?php echo esc_url(__('https://strawberryfields.web.dmitcapstone.ca/booking/')); ?>">Book Appointment</a>
                        <img src="<?php bloginfo('template_directory'); ?>/img/computer.webp" alt="<?php the_title (); ?>">
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php get_footer(); ?>