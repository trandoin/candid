function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
 function fnab(){
document.getElementById('myBtn1').style.display='none';
document.getElementById('myBtn2').style.display='block';
 }
 function fnba(){
  document.getElementById('myBtn1').style.display='block';
  document.getElementById('myBtn2').style.display='none';
     }
    $( "#myBtn1" ).click(function() {
      $( "#more1" ).slideDown( "slow" );
    });
    $( "#myBtn2" ).click(function() {
      $( "#more1" ).slideUp( "slow" );
    });
    function fnbc(){
      document.getElementById('myBtn3').style.display='none';
      document.getElementById('myBtn4').style.display='block';
         }
         function fncb(){
          document.getElementById('myBtn3').style.display='block';
          document.getElementById('myBtn4').style.display='none';
             }
            $( "#myBtn3" ).click(function() {
              $( "#more2" ).slideDown( "slow" );
            });
            $( "#myBtn4" ).click(function() {
              $( "#more2" ).slideUp( "slow" );
            });
            function fncd(){
              document.getElementById('myBtn5').style.display='none';
              document.getElementById('myBtn6').style.display='block';
                 }
                 function fndc(){
                  document.getElementById('myBtn5').style.display='block';
                  document.getElementById('myBtn6').style.display='none';
                     }
                    $( "#myBtn5" ).click(function() {
                      $( "#more3" ).slideDown( "slow" );
                    });
                    $( "#myBtn6" ).click(function() {
                      $( "#more3" ).slideUp( "slow" );
                    });
                    function fnde(){
                      document.getElementById('myBtn7').style.display='none';
                      document.getElementById('myBtn8').style.display='block';
                         }
                         function fned(){
                          document.getElementById('myBtn7').style.display='block';
                          document.getElementById('myBtn8').style.display='none';
                             }
                            $( "#myBtn7" ).click(function() {
                              $( "#more4" ).slideDown( "slow" );
                            });
                            $( "#myBtn8" ).click(function() {
                              $( "#more4" ).slideUp( "slow" );
                            });