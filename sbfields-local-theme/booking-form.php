<head>
  <style>
      @import url("https://fonts.googleapis.com/css?family=Nunito&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: #f5f6f7;
  font-family: "Nunito", sans-serif;
}

main {
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
}

/* stepper */
#minus , #plus{
  min-width: 2.5rem;
  height: 2.5rem;
  transition: all 300ms ease;
  border-radius: 10px;
}
#minus:hover{
  background-color:red;    
  border:none;
}
#plus:hover{
  background-color:rgb(7, 216, 7);
  border:none;
}
#numberPlace {
  margin: 0 20px 0 20px;
  font-size: 1.125rem;
}

/* end */

.stepper {
  width: 20rem;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 5%;
}

.step--1,
.step--2,
.step--3,
.step--4,
.step--5 {
  width: 5rem;
  padding: 0.5rem 0;
  background: #fff;
  color: #666;
  text-align: center;
}
.step--1,
.step--2,
.step--3,
.step--4 {
  border-right: 1px solid #666;
}

.sr-only {
  position:absolute;
  left:-10000px;
  top:auto;
  width:1px;
  height:1px;
  overflow:hidden;
}

.form {
  background: #fff;
  text-align: center;
  position: absolute;
  width: 25rem;
  min-height: 350px;
  box-shadow: 0.2rem 0.2rem 0.5rem rgba(51, 51, 51, 0.2);
  display: none;
  border-radius: 1rem;
  overflow: hidden;
}
.form--header-container {
  background: linear-gradient(to right, rgb(51, 51, 51), #919191);
  color: #fff;
  height: 10rem;
  padding: 1rem 0;
  margin-bottom: 2rem;
}

.form--header-title {
  font-size: 1.4rem;
}

.form--header-text {
  padding: 0.5rem 0;
}

input[type="text"] {
  padding: 0.8rem;
  margin: auto;
  margin-top: 0.5rem;
  width: 20rem;
  display: block;
  border-radius: 0.5rem;
  outline: none;
  border: 1px solid #bdbdbb;
}

.form__btn {
  background: #333;
  color: #fff;
  outline: none;
  border: none;
  padding: 0.5rem 0.7rem;
  width: 7rem;
  margin: 1rem auto;
  border-radius: 0.9rem;
  text-transform: uppercase;
  font-weight: 700;
  cursor: pointer;
}
.form--message-text {
  width: 25rem;
  background: #fff;
  color: #444;
  padding: 2rem 1rem;
  text-align: center;
  font-size: 1.4rem;
  box-shadow: 0.2rem 0.2rem 0.5rem rgba(51, 51, 51, 0.2);
  animation: fadeIn 0.8s;
  border-radius: 1rem;
}

.form-active {
  z-index: 1000;
  display: block;
}
.form-active-animate {
  animation: moveRight 1s;
}
.form-inactive {
  display: block;
  animation: moveLeft 1s;
}

.step-active {
  background: #666;
  color: #fff;
  border: 1px solid #666;
}

@keyframes moveRight {
  0% {
    transform: translateX(-27rem) scale(0.9);
    opacity: 0;
  }
  100% {
    transform: translateX(0rem) scale(1);
    opacity: 1;
  }
}

@keyframes moveLeft {
  0% {
    transform: translateX(0rem) scale(1);
    opacity: 1;
  }
  100% {
    transform: translateX(27rem) scale(0.9);
    opacity: 0;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
    </style>
  </head>
<!-- The Modal THE FORM -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
<span id="close-modal">X</span>
      <div class="stepper">
          <div class="step--1 step-active">Step 1</div>
          <div class="step--2">Step 2</div>
          <div class="step--3">Step 3</div>
          <div class="step--4">Step 4</div>
          <div class="step--5">Finish</div>
      </div>

      <form class="form form-active">
          <div class="form--header-container">
              <h1 class="form--header-title">
                  Pick a Basket
              </h1>

              <p class="form--header-text">
                  Wednesday, September 28 @ 8:00am
              </p>
          </div>
          <div id="mainDiv">
              <button id="minus">-</button>
              <span id="numberPlace">0</span>
              <button id="plus">+</button>
          </div>
          <button class="form__btn" id="btn-1">Next</button>
      </form>
      <form class="form">
          <div class="form--header-container">
              <h1 class="form--header-title">
                  Please enter your contact information
              </h1>
              <p class="form--header-text">
                  Wednesday, September 28 @ 8:00 am
              </p>
          </div>
          <label for="first_name" class="sr-only">First Name</label>
          <input type="text" name="first_name" id="first_name" placeholder="First Name" />
          <label for="last_name" class="sr-only">Last Name</label>
          <input type="text" name="last_name" id="last_name" placeholder="Last Name" />

          <label for="email" class="sr-only">Email</label>
          <input type="text" name="email" id="email" placeholder="Email" />

          <label for="phone" class="sr-only">Phone</label>
          <input type="text" name="phone" id="phone" placeholder="Phone Number" />

          <button class="form__btn" id="btn-2-prev">Previous</button>
          <button class="form__btn" id="btn-2-next">Next</button>
      </form>
      <form class="form">
          <div class="form--header-container">
              <h1 class="form--header-title">
                  Review Your Appointment
              </h1>

              <p class="form--header-text">
                  Wednesday, September 28 @ 8:00 am
              </p>
          </div>
          <p>
              Hi ___________________________, please review your booking information. If everything is correct, please
              accept our terms and conditions below to confirm your booking!
          </p>
          <p>
              <b>Picking Date/Time:</b> Wednesday September 28 @ 8:00am
          </p>
          <p>
              <b>Baskets (lbs):</b> 2 baskets - 10 lbs
          </p>
          <p>
              <b>Approx Total Cost:</b> $50.00
          </p>
          <button class="form__btn" id="btn-3-prev">Previous</button>
          <button class="form__btn" id="btn-3-next">Next</button>
      </form>
      <form class="form">
          <div class="form--header-container">
              <h1 class="form--header-title">
                  Your Appointment has been confirmed!
              </h1>

              <p class="form--header-text">

              </p>
          </div>
          <p>
              Thank you for booking with us. We look forward to seeing you on Wednesday September 28 at 8am
          </p>
          <p>
              We accept cash or email transfer as payment.
          </p>
          <p>
              Baskets provided free of charge, although you are welcome to bring your own!
          </p>
          <p>
              You will receive a confirmation e-mail prior to your appointment date.
          </p>
          <p>
              If you need to cancel your appointment or have any questions, <a
                  href="mailto:strawberryfieldsedm@gmail.com">strawberryfieldsedm@gmail.com</a>
          </p>
          <p>
              Children of all ages are welcome with parental supervision.
          </p>
          <button class="form__btn" id="btn-4">Finish</button>

      </form>
      <div class="form--message"></div>
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
</script>