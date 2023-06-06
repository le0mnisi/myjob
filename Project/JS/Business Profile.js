// Get the form element
var form = document.querySelector('form');

// Add an event listener for the form submission
form.addEventListener('submit', function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the form data
  var formData = new FormData(form);

  // Make an AJAX request to the PHP script
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save-data.php');
  xhr.onload = function() {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        alert(response.message);
      } else {
        alert('Error: ' + response.message);
      }
    } else {
      alert('Error: ' + xhr.statusText);
    }
  };
  xhr.send(formData);
});