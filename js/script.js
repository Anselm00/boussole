var index = 1;

$("#two").hide();

//Action button go gauche
$( "#contrat-left" ).click(function() {

    //if content two is displayed, display the first content (#one)
    if(index==2) {
        index=1;
        $("#one").addClass("gauche");
        $("#two").addClass("droite");
        $( ".droite" ).hide( "slow" );
        $( ".gauche" ).fadeIn( "slow" );
        $("#one").removeClass("gauche");
        $("#two").removeClass("droite");
    } 
    //else do nothing
    
  });

//Action button go droite
  $( "#contrat-right" ).click(function() {
      

    //if content one is displayed, display the second content (#second)
    if(index==1) {
        index=2;
        $("#two").addClass("gauche");
        $("#one").addClass("droite");
        $( ".droite" ).hide( "slow" );
        $( ".gauche" ).fadeIn( "slow" );
        $("#two").removeClass("gauche");
        $("#one").removeClass("droite");
    } 
    
  });