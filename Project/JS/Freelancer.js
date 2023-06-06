// Save form data to localStorage
function saveData() {
    localStorage.setItem("name", document.getElementById("name").value);
    localStorage.setItem("surname", document.getElementById("surname").value);
    localStorage.setItem("id", document.getElementById("id").value);
    localStorage.setItem("address", document.getElementById("address").value);
    localStorage.setItem("phone", document.getElementById("phone").value);
    localStorage.setItem("email", document.getElementById("email").value);
    localStorage.setItem("grade", document.getElementById("grade").value);
    localStorage.setItem("description", document.getElementById("description").value);
    localStorage.setItem("Pdescription", document.getElementById("Pdescription").value);
    localStorage.setItem("wdescription", document.getElementById("wdescription").value);
    localStorage.setItem("social", document.getElementById("social").value);
    }
    
    // Load form data from localStorage
    function loadData() {
    document.getElementById("name").value = localStorage.getItem("name");
    document.getElementById("surname").value = localStorage.getItem("surname");
    document.getElementById("id").value = localStorage.getItem("id");
    document.getElementById("address").value = localStorage.getItem("address");
    document.getElementById("phone").value = localStorage.getItem("phone");
    document.getElementById("email").value = localStorage.getItem("email");
    document.getElementById("grade").value = localStorage.getItem("grade");
    document.getElementById("description").value = localStorage.getItem("description");
    document.getElementById("Pdescription").value = localStorage.getItem("Pdescription");
    document.getElementById("wdescription").value = localStorage.getItem("wdescription");
    document.getElementById("social").value = localStorage.getItem("social");
    }
    
    // Clear form data from localStorage
    function clearData() {
    localStorage.clear();
    document.getElementById("name").value = "";
    document.getElementById("surname").value = "";
    document.getElementById("id").value = "";
    document.getElementById("address").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("email").value = "";
    document.getElementById("grade").value = "";
    document.getElementById("description").value = "";
    document.getElementById("socialP").value = "";
}
// Get the file input element
var fileInput = document.getElementById("profile-pic");

// Add an event listener to the file input element
fileInput.addEventListener("change", function(event) {
  // Get the selected file
  var file = event.target.files[0];
  
  // Create a new FileReader object
  var reader = new FileReader();
  
  // Set the onload function for the FileReader object
  reader.onload = function(event) {
    // Get the data URL of the uploaded file
    var dataUrl = event.target.result;
    
    // Set the src attribute of the profile picture element to the data URL
    document.getElementById("profile-pic-preview").src = dataUrl;
  };
  
  // Read the selected file as a data URL
  reader.readAsDataURL(file);
});
const quizForm = document.querySelector('#quiz-form');
const resultsDiv = document.querySelector('#results');
// Generate 20 random math questions
const questions = [];
for (let i = 0; i < 20; i++) {
const num1 = Math.floor(Math.random() * 10) + 1;
const num2 = Math.floor(Math.random() * 10) + 1;
const operator = Math.random() < 0.5 ? '+' : '-';
const question = `${num1} ${operator} ${num2} = `;
questions.push(question);
}

// Display questions in the quiz form
const ol = questionss.querySelector('ol');
questions.forEach((question, index) => {
const li = document.createElement('li');
const label = document.createElement('label');
label.textContent = `${index + 1}. ${question}`;
const input = document.createElement('input');
input.type = 'number';
input.required = true;
li.appendChild(label);
li.appendChild(input);
ol.appendChild(li);
});

// Calculate results and display message
quizForm.addEventListener('submit', (event) => {
event.preventDefault();
let correctAnswers = 0;
const userAnswers = [];
const inputs = quizForm.querySelectorAll('input[type="number"]')});
inputs.forEach((input, index) => {
const userAnswer = parseInt(input.value);
userAnswers.push(userAnswer);
const question = questions[index];
const [num1, operator, num2] = question.split(' ');
const correctAnswer = operator === '+' ? parseInt(num1) + parseInt(num2) : parseInt(num1) - parseInt(num2);
if (userAnswer === correctAnswer) {
correctAnswers++;
input.style.backgroundColor = '#C8E6C9';
} else {
input.style.backgroundColor = '#FFCDD2';
}
});
// const message = correctAnswers > 15 ? 'You have high problem solving skills' :
//  correctAnswers > 9 ? 'You have adequate analytical problem solving skills' : 
//  correctAnswers < 9 ? 'We would like to refer you to free short courses that are available to improve on your problem solving skills':
// resultsDiv.textContent = `${message}

const questionss = [
    {
      question: "What is the capital of England?",
      options: ["London", "Paris", "Berlin", "Madrid"],
      answer: "London"
    },
    {
      question: "What is the opposite of 'hot'?",
      options: ["Cold", "Wet", "Dry", "Dark"],
      answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },
    {
        question: "What is the opposite of 'hot'?",
        options: ["Cold", "Wet", "Dry", "Dark"],
        answer: "Cold"
    },

    // add more questions here
  ];
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }

  const shuffledQuestions = shuffle(questions);

  form.addEventListener("submit", e => {
    e.preventDefault();
    let score = 0;
    shuffledQuestions.forEach((question, index) => {
      const selectedOption = form.querySelector(`input[name=question${index}]:checked`);
      if (selectedOption && selectedOption.value === question.answer) {
        score++;
      }
    });
    const result = document.getElementById("result");
    result.innerHTML = `You scored ${score} out of ${shuffledQuestions.length}. `;
    if (score > 15) {
      result.innerHTML += "Outstanding!";
    } else if (score > 10) {
      result.innerHTML += "Meritorious.";
    } else {
      result.innerHTML += "Please consider attending the short courses to improve your academics.";
    }
  });