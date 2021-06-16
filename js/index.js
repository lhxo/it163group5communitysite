$( function() {
  $( ".accordion" ).accordion();
} );


function startTime() {
  var today = new Date();
  var s = today.getSeconds();
  s = checkTime(s);
  
  alert('You are on this page for: ' + s + ' seconds.')

  var t = setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}