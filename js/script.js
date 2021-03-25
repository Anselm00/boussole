var index = 1;

$("#two").hide();

//Action button go left
$( "#contrat-left" ).click(function() {

    //if content two is displayed, display the first content (#one)
    if(index==2) {
        index=1;
        $("#one").addClass("left");
        $("#two").addClass("right");
        $( ".right" ).hide( "slow" );
        $( ".left" ).fadeIn( "slow" );
        $("#one").removeClass("left");
        $("#two").removeClass("right");
    } 
    //else do nothing
    
  });

//Action button go right
  $( "#contrat-right" ).click(function() {
      

    //if content one is displayed, display the second content (#second)
    if(index==1) {
        index=2;
        $("#two").addClass("left");
        $("#one").addClass("right");
        $( ".right" ).hide( "slow" );
        $( ".left" ).fadeIn( "slow" );
        $("#two").removeClass("left");
        $("#one").removeClass("right");
    } 
    
  });