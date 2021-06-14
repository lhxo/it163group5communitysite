$( function() {
  $( ".accordion" ).accordion();
} );


window.ondblclick = function startTime(){
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
  const btn = document.getElementById("btn-theme-toggle");
  // Select the stylesheet <link>
  const theme = document.getElementById("theme-link");

  // Listen for a click on the button
  btn.addEventListener("click", function() {

    // If the current URL contains "light-theme"
    if (theme.getAttribute("href") == "../css/styles.css") {
      // ... then switch it to "dark-theme"
      theme.href = "../css/styles-dark.css";
    // Otherwise...
    } else {
      // ... switch it to "light-theme"
      theme.href = "../css/styles.css";
  }
})
}