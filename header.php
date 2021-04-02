<!DOCTYPE html>
  <html>
    <head>
    <script>
      function showHint(str) {
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "php/gethint.php?q=" + str, true);
          xmlhttp.send();
        }
      }
      
      function clearShowHint() {
        document.getElementById("txtHint").innerHTML = "";
      }

      </script>
      <!--Import Google Icon Font-->
      <link href="font/font.css" rel="stylesheet">
       <!--Import materialize.css-->
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="style.css"  media="screen,projection"/>
		<script src="js/jquery.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div class="fond"></div>
  <nav class="nav-wrapper transparent" data-target="blue" style="    position: fixed;    box-shadow: none;
    z-index: 2;color:black;">
    <div class="nav-wrapper transparent">
      <div>
      <div class="" style="    width: 350px;
    height: 64px;
    margin-left: 65px;float: left;">
      <form style="color:black;">
      
        <div class="input-field">
        <input id="search" type="search" onkeyup="showHint(this.value)" required >
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons" onclick="clearShowHint()">close</i>
        </div>
      </form>
      </div>

      <ul class="hints"><span id="txtHint"></span></ul>

      
        <ul id="nav-mobile" class="right" style="color:black;">
        <li><a class="black-text" href="navigation-boussole.php">PolyProse</a></li>
          <li><a class="black-text" href="sociabilite.php">Sociabilité</a></li>
          <li><a class="black-text" href="electre.php">Electre</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
   
    <div class="row">
    

    <?php require('menu.php');?></div>
    
  </ul>

  <a href="#" id="menu-parallele" data-target="slide-out" class="sidenav-trigger"><img style="width: 44px;" src="img/logo_home.png"/></a>
