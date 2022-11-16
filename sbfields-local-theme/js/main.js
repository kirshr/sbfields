const formBtn1 = document.querySelector("#btn-1");
const formBtnPrev2 = document.querySelector("#btn-2-prev");
const formBtnNext2 = document.querySelector("#btn-2-next");
const formBtnPrev3 = document.querySelector("#btn-3-prev");
const formBtnNext3 = document.querySelector("#btn-3-next");
const formBtn4 = document.querySelector("#btn-4");

var basket = document.getElementById("numberPlace");

var firstName = document.getElementById("first_name");
var lastName = document.getElementById("last_name");
var email = document.getElementById("email");
var phone = document.getElementById("phone");
var phoneNo = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
var validEmail =
  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// Button listener of form 1
formBtn1.addEventListener("click", function (e) {
  if (basket.innerText == 0) {
    alert("Please select a number of basket");
    e.preventDefault();
  } else {
    gotoNextForm(formBtn1, formBtnNext2, 1, 2);
    e.preventDefault();
  }
});

// firstName1.addEventListener("change", function (e) {
//   e.preventDefault();
//   console.log(firstName1.value);
// });

// Next button listener of form 2
formBtnNext2.addEventListener("click", function (e) {
  if (
    firstName.value == "" ||
    lastName.value == "" ||
    email.value == "" ||
    phone.value == ""
  ) {
    alert("Please enter all the necessary information");
    e.preventDefault();
    return false;
  } else {
    if (phone.value.match(phoneNo)) {
      if (email.value.match(validEmail)) {
        gotoNextForm(formBtnNext2, formBtnNext3, 2, 3);
        e.preventDefault();
        console.log(e);
      } else {
        alert("Please put a valid email");
        e.preventDefault();
      }
    } else {
      alert("Please put a valid phone number");
      e.preventDefault();
    }
  }
});
// Previous button listener of form 2
formBtnPrev2.addEventListener("click", function (e) {
  gotoNextForm(formBtnNext2, formBtn1, 2, 1);
  e.preventDefault();
});

// Next button listener of form 3
formBtnNext3.addEventListener("click", function (e) {
  gotoNextForm(formBtnNext3, formBtn4, 3, 4);
  e.preventDefault();
});

// Previous button listener of form 3
formBtnPrev3.addEventListener("click", function (e) {
  gotoNextForm(formBtnNext3, formBtnPrev2, 3, 2);
  e.preventDefault();
});

// Button listener of form 4
formBtn4.addEventListener("click", function (e) {
  document.querySelector(`.step--4`).classList.remove("step-active");
  document.querySelector(`.step--5`).classList.add("step-active");
  formBtn4.parentElement.style.display = "none";
  document.querySelector(".form--message").innerHTML = `
      <h1 class="form--message-text">You've successfully booked</h1>
      <button>Close</button>
      `;
});

const gotoNextForm = (prev, next, stepPrev, stepNext) => {
  // Get form through the button
  const prevForm = prev.parentElement;
  const nextForm = next.parentElement;
  const nextStep = document.querySelector(`.step--${stepNext}`);
  const prevStep = document.querySelector(`.step--${stepPrev}`);
  // Add active/inactive classes to both previous and next form
  nextForm.classList.add("form-active");
  nextForm.classList.add("form-active-animate");
  prevForm.classList.add("form-inactive");
  // Change the active step element
  prevStep.classList.remove("step-active");
  nextStep.classList.add("step-active");
  // Remove active/inactive classes to both previous an next form
  setTimeout(() => {
    prevForm.classList.remove("form-active");
    prevForm.classList.remove("form-inactive");
    nextForm.classList.remove("form-active-animate");
  }, 1000);
};
