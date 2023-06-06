//Email field Validation format
const email = document.getElementById("email");

email.addEventListener("blur", () => {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regex.test(email.value)) {
    email.setCustomValidity("Please enter a valid email address");
    email.classList.add("invalid");
  } else {
    email.setCustomValidity("");
    email.classList.remove("invalid");
  }
});


//opencagedata geocode API to validate location
var apiKey = '204e28ccce0f4910ab46d1de5609417d';
var form = document.getElementById("user_information_form");
var address = document.getElementById("adr");
var city = document.getElementById("city");
var zip = document.getElementById("zip");
var country = document.getElementById("country");




//event listener prevent submit if fields have invalid inputs.
//Validate that input entered is valid and not just random words.
form.addEventListener("submit", function(event){
    event.preventDefault();

    var searchQuery = `${address.value}, ${city.value}, ${zip.value}, ${country.value}`;//Query for nominatim openstreetmap 

    fetch(`https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(searchQuery)}&key=${apiKey}`)//search request to api
    .then(response => response.json())
    .then(data => {
        if(data.length > 0){
            form.submit();
            address.classList.remove("invalid");
            city.classList.remove("invalid");
            country.classList.remove("invalid");
            zip.classList.remove("invalid");
        }else{
            alert("Invalid address. Please enter a valid address.");
            address.classList.add("invalid");
            city.classList.add("invalid");
            country.classList.add("invalid");
            zip.classList.add("invalid");
        }
    })
    .catch(error => { //catch unexpected error from the http request
        console.log(error);
        alert("There was an error with your request");
    });
});

// Month field validation
function validateForm() {
    var monthValidation = document.getElementById("expmonth").value;
    // Array of months to choose from
    var monthArray = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    // Check if user input is the same as value in array
    if(monthArray.indexOf(monthValidation) === -1) {
        document.getElementById("monthError-message").innerHTML = "Please input a valid month starting with a capital letter";
        return false;
    } else {
        document.getElementById("monthError-message").style.visibility = "hidden";
    }
    return true;
}

form.addEventListener("submit", function(event) { //eventListener to check month entered matches array
    if (!validateForm()) { //if false trigger the function preventDefault()
        event.preventDefault(); //Prevent form from submitting
    }
});