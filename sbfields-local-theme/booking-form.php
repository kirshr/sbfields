<?php include plugin_dir_path(__FILE__)."inc/dbConfig.php"; ?>

<!-- The Modal THE FORM -->
<div id="myModal" class="modal">
    <div class="form-container">

        <div class="breadcrumb">
            <h3>Start</h3>
                <div class="steps">
                    <p class="step--1 step--active">Pick your Basket</p>
                    <p class="step--2">Contact Information</p>
                    <p class="step--3">Review</p>
                    <p class="step--4">Confrimation</p>
                </div>    
            <h3>Finish</h3>
        </div>

        <div class="form-outer">

        <form class="form form-active" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
            <div id="mainDiv">
                <div class="title">
                    <h2 class="form--header-title">How many baskets(lbs) of strawberries would you like to pick?</h2>
                    <p class="form--header-text" id="form-date"></p>
                </div>
                <div>
                    <div class="stepper">
                        <button id="minus">-</button>
                        <span id="numberPlace">0</span>
                        <button id="plus">+</button>
                        <img src="<?php bloginfo('template_directory'); ?>/img/picnic-basket.png" alt="<?php the_title (); ?>">
                        <p>1 or more</p>
                    </div>
                    <div class="totals">
                        <p>Total in lbs: 10lbs</p>
                        <p>Approx Cost ($5/lb): $50.00</p>
                    </div>
                </div>
                <div class="instructions">
                    <h2>Picking Instructions</h2>
                    <p>Please use the plus or minus buttons to select the amoutn of baskets (lbs) you ouwld like to pick</p>
                    <div class="basket">
                        <img src="<?php bloginfo('template_directory'); ?>/img/picnic-basket.png" alt="<?php the_title (); ?>">
                        <p>  = 5 Lbs</p>
                    </div>
                    <p>If no appointments avaliable we have a waitlist - <a href="#">Click here to join!</a></p>
                </div>
            </div>
            <button class="form__btn" id="btn-1">Next</button>
        </form>

        <form class="form" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
            <div>
                <h2 class="form--header-title">Please enter your contact information</h2>
                <p class="form--header-text" id="form-date-2"></p>
            </div>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="First Name" />
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" />

                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" />

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" />

                <button class="form__btn" id="btn-2-prev">Previous</button>
                <button class="form__btn" id="btn-2-next">Next</button>
        </form>

        <form class="form" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
            <div>
                <h2 class="form--header-title">Review Your Appointment</h2>
                <p class="form--header-text" id="form-date-3"></p>
            </div>
            <div class="review">
                <p>Hi __________, please review your booking information. If everything is correct, please accept our terms and conditions below to confirm your booking!</p>
                <p><b>Picking Date/Time:</b><span id="form-date-4"></span></p>
                <p><b>Baskets (lbs):</b> 2 baskets - 10 lbs</p>
                <p><b>Approx Total Cost:</b> <span id="price"></span></p>
            </div>
            <div class="terms">
                <h2>Terms & Conditions</h2>
                <p>You must agree to these terms before confirming your appointment</p>
                    <input type="checkbox" id="term1" name="term1" value="term1">
                    <label for="term1"> Term 1</label><br>
                    <input type="checkbox" id="term2" name="term2" value="term2">
                    <label for="term2"> Term 2</label><br>
                    <input type="checkbox" id="term3" name="term3" value="term3">
                    <label for="term3"> Term 3</label><br>
            </div>
                <button class="form__btn" id="btn-3-prev">Previous</button>
                <button class="form__btn" id="btn-3-next">Next</button>
        </form>

        <form class="form" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
            <div>
                <h2 class="form--header-title">Your Appointment has been confirmed!</h2>
                <p class="form--header-text"></p>
            </div>
                <p>Thank you for booking with us. We look forward to seeing you on <span id="confirm-date"></span></p>
                <p>We accept cash or email transfer as payment.</p>
                <p><img src="/img/picnic-basket.png" alt=""> Baskets provided free of charge, although you are welcome to bring your own!</p>
                <p>You will receive a confirmation e-mail prior to your appointment date.</p>
                <p>If you need to cancel your appointment or have any questions, <a href="#">please contact us here.</a></p>
                <p>Children of all ages are welcome with parental supervision.</p>
                <div class="icons">
                    <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/bathroom.png" alt="<?php the_title (); ?>"> 
                        <p>No Bathrooms</p>
                    </div>
                    <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/no-animal-testing.png" alt="<?php the_title (); ?>"> 
                        <p>No Pets</p>
                    </div>
                </div>
                <button class="form__btn" id="btn-4" name="submit">Finish</button>
        </form>

        <div class="form--message"></div>
        
        </div>
    </div>
</div>

    <script>
        // Get the modal
        let modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        let span = document.getElementById("close-modal");

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        jQuery(".calendar").on("click", ".data div", function (e) {
            let booking_time = this.dataset.time;
            let booking_date = this.dataset.date;
            console.log(booking_time);
            document.getElementById("form-date").innerHTML = booking_time + ' ' + ' ' + booking_date;

            document.getElementById("form-date-2").innerHTML = booking_time + ' ' + ' ' + booking_date;

            document.getElementById("form-date-3").innerHTML = booking_time + ' ' + ' ' + booking_date;

            document.getElementById("form-date-4").innerHTML = booking_time + ' ' + ' ' + booking_date;

            document.getElementById("confirm-date").innerHTML = booking_time + ' ' + ' ' + booking_date;
    
        });

        //AJAX to ADD AVAILABILITY TO DB
        jQuery(document).on("click", "#btn-4", function (e){
            e.preventDefault();
            var firstName = document.getElementById('first_name').value;  
            var lastName = document.getElementById('last_name').value;  
            var email = document.getElementById('email').value;  
            var phone = document.getElementById('phone').value; 
            var booking_date = document.getElementById("confirm-date").innerText;
            var basket = document.getElementById("numberPlace").innerText;
                if (firstName.length != 0 || lastName.length !=0 || email.length !=0|| phone.length !=0)  
                {  
                    jQuery.ajax({
                        type:"POST",
                        url: 'http://localhost/wordpress-6.0.2/wordpress/booking/wp-content/themes/sbfields-local-theme/insert.php',
                    data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    phone: phone,
                    date: booking_date,
                    basket: basket
                    },
                    success: function(data) {
                        alert(data);
                    }
                })
                }  
                else  
                {              
                    alert("Please Enter Enter all the necessary fields");  
            }  
        })
    </script>