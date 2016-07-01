$( ".form_box" ).hide();


$( "#header-button" ).click(function() {
  $( ".form_box" ).fadeIn( "slow", function() {
    // Animation complete
  });
});