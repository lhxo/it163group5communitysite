$( function() {
  $( ".accordion" ).accordion();
} );


window.ondragstart = function startTime(){
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


$( function() {
  $( "#tabs" ).tabs();
} );


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

