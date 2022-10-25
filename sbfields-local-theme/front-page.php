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
    </div>
        <div class="container">
            <div> 
                <h2>Strawberry U-Pick!</h2>
                <h3>Located in Southwest Edmonton</h3>
                    <p>- Strawberry Fields is a family run, pesticide free, Strawberry U-Pick farm located in Southwest Edmonton.</p> 
                    <p>- See our map for specific instructions.
                    <p>- Picking strawberries is by APPOINTMENT ONLY</p>
                    <a href="<?php echo esc_url(__('http://localhost/wordpress-6.0.2/wordpress/contact/')); ?>">Directions</a>
            </div>
            <div>
                <h2>Pricing is $5/lb</h2>
                <h3>Our large baskets hold about $25 of strawberries (~ 5lbs of berries)</h3>
                    <p>- We provide free baskets but you may bring your own</p>
                    <p>- We weigh the berries at the end of your picking to determine the price</p>
                    <p>- When booking an appointment we ask for you to estimate how many baskets you would like to pick to help us know how many appointments we can schedule. </p>
                    <p>- We currently accept cash or etransfer as payment.</p>
                    <a href="<?php echo esc_url(__('http://localhost/wordpress-6.0.2/wordpress/booking/')); ?>">More Info</a>
            </div>
            <div>
                <h2>Book a Picking Time</h2>
                <h3>By Appointment Only</h3>
                <p>- Appointments will open up as soon as we have enough strawberries</p>
                <p>- We run by Appointment Only! (There are no drop in times)</p>
                <p>- If there are no appointment times it means that this weeks appointments are currently full. </p>
                <p>- We only open a weeks worth of appointments at a time</p>
                <p>- If there are no appointments currently availalbe you can put yourself on our waiting list. We will be working through this list and offering picking appointments on a first come first serve basis</p>
                <a href="<?php echo esc_url(__('http://localhost/wordpress-6.0.2/wordpress/booking/')); ?>">Book Appointment</a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>