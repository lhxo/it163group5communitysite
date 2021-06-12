$( function() {
  $( ".accordion" ).accordion();
} );


function startTime() {
  var today = new Date();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById('timer1').textContent = alert('You are on this page for: ' + s + ' seconds.');
  document.getElementById('timer2').textContent = alert('You are on this page for: ' + s + ' seconds.');
  document.getElementById('timer3').textContent = alert('You are on this page for: ' + s + ' seconds.');
  document.getElementById('timer4').textContent = alert('You are on this page for: ' + s + ' seconds.');

  var t = setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

$( function() {
  // run the currently selected effect
  function runEffect() {
    // get effect type from
    var selectedEffect = $( "#effectTypes" ).val();

    // Most effect types need no options passed by default
    var options = {};
    // some effects have required parameters
    if ( selectedEffect === "scale" ) {
      options = { percent: 50 };
    } else if ( selectedEffect === "transfer" ) {
      options = { to: "#button", className: "ui-effects-transfer" };
    } else if ( selectedEffect === "size" ) {
      options = { to: { width: 200, height: 60 } };
    }

    // Run the effect
    $( "#effect" ).effect( selectedEffect, options, 500, callback );
  };

  // Callback function to bring a hidden box back
  function callback() {
    setTimeout(function() {
      $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
    }, 1000 );
  };

  // Set effect from select menu value
  $( "#button" ).on( "click", function() {
    runEffect();
    return false;
  });
} );
