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

  <nav class="nav-wrapper transparent" data-target="blue" style="    position: fixed;
    z-index: 2;">
    <div class="nav-wrapper transparent">
      <div class="container">
        <a href="#" class="brand-logo">Navigation Boussole</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="navigation-boussole.3.php">Accueil</a></li>
          <li><a href="navigation-boussole.php">Sociabilité</a></li>
          <li><a href="navigation-boussole.1.php">Electre</a></li>
          <li><a href="navigation-boussole.2.php">Cloud</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">

      <a href="https://www.eglise-realiste.org"><img src="img/logo_home1-omb.jpg" style="
    width: 50px;"/>Eglise-réaliste.org</a>
      
    </div></li>
    <div class="row">
    <form class="col s12"><div class="input-field col s12">

        <i class="material-icons prefix">search</i>
          <input placeholder="Recherche" id="fname" name="fname" type="text" class="validate" onkeyup="showHint(this.value)">

         </div></div></div>
    <span id="txtHint"></span>

    <li><div class="divider"></div></li> 

    <?php require('menu.php');?>
    
  </ul>

  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
