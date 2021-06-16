//random number generator
function rng() {
  //set random to a random integer 1-10
  var random = Math.floor((Math.random() * 10) + 1);
  //if you roll a 10, you win and get alerted
  if(random==10){
    alert("Winner winner chicken dinner! You get nothing! Good Day Sir!");
    }
  }

//runs rng function onload
window.onload = rng();
//end random

//allows for accordion
$( function() {
  $( ".accordion" ).accordion();
} );

//ondrag to check how long you have been on the page
window.ondragenter = function startTime(){
  var today = new Date();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById('timer').textContent = alert('You are on this page for ' + s + ' seconds.');
};

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

//allow for tab on small screen
$( function() {
  $( "#tabsS" ).tabs();
} );

//allow for tab on medium screen
$( function() {
  $( "#tabsM" ).tabs();
} );

//JS for light+dark switch
// Select the button
window.onload = function themeToggle() {
  const toggleButton = document.getElementById("check-theme-toggle");
  // Select the stylesheet <link>
  const theme = document.getElementById("theme-link");
  //check if there is any saved theme in the local storage
  const savedTheme = localStorage.getItem("savedTheme");
  const savedToggle = localStorage.getItem("savedToggle");

    if (savedTheme) {
      theme.href = savedTheme;
    }

    if (savedToggle) {
      toggleButton.checked = savedToggle;
    }

  // Listen for a click on the button
  toggleButton.addEventListener("change", function(event) {

    // If the current URL contains "light-theme"
    if (theme.getAttribute("href") == "../css/styles.css") {
      // ... then switch it to "dark-theme"
      theme.href = "../css/styles-dark.css";
      localStorage.setItem("savedTheme", "../css/styles-dark.css");

      
    // Otherwise...

    } else {
      // ... switch it to "light-theme"
      theme.href = "../css/styles.css";
      localStorage.setItem("savedTheme", "../css/styles.css");
  }

  const checkbox = event.target;  
  localStorage.setItem("savedToggle", checkbox.checked);

})
}