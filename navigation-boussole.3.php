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

	<nav class="nav-extended">
	<div class="nav-wrapper">
		<a href="#" class="brand-logo">Logo</a>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">JavaScript</a></li>
		</ul>
	</div>
	<div class="nav-content">
		<ul class="tabs tabs-transparent">
			<li class="tab"><a href="#test1">Test 1</a></li>
			<li class="tab"><a class="active" href="#test2">Test 2</a></li>
			<li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
			<li class="tab"><a href="#test4">Test 4</a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">JavaScript</a></li>
</ul>

<div id="test1" class="col s12">Test 1</div>
<div id="test2" class="col s12">Test 2</div>
<div id="test3" class="col s12">Test 3</div>
<div id="test4" class="col s12">Test 4</div>

<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
	<a href="https://www.eglise-realiste.org"><img src="img/logo_home1-omb.jpg" style="
  width: 50px;"/>Eglise-réaliste.org</a>
	
  </div></li>
  

  <li><div class="divider"></div></li> 

  <?php require('menu.php');?>
  
</ul>

<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>



<section class="search-container">
<p><i>Signification des mots de la boussole</i></p>
<h5>Exploration</h5>
<nav>
  <div class="nav-wrapper indigo">
	<form>
	
	  <div class="input-field">
		<input id="search" type="search" onkeyup="showHint(this.value)" required >
		<label class="label-icon" for="search"><i class="material-icons">search</i></label>
		<i class="material-icons" onclick="clearShowHint()">close</i>
	  </div>
	</form>
  </div>
</nav>



	   </div></div></div>
  <ul><span id="txtHint"></span></ul>
  </section>


<?php require('modal/adequation.php');?> 
<?php require('modal/alliance.php');?>
<?php require('modal/ame-corps.php');?>  
<?php require('modal/ami.php');?>   
<?php require('modal/ancestral.php');?> 
<?php require('modal/assume.php');?>
<?php require('modal/attentif.php');?>
<?php require('modal/auteur.php');?>
<?php require('modal/autodidacte.php');?>
<?php require('modal/besoins.php');?>
<?php require('modal/bonheur-commun.php');?>
<?php require('modal/bourgeois.php');?>
<?php require('modal/brave.php');?>
<?php require('modal/camarade.php');?>
<?php require('modal/capacites.php');?>
<?php require('modal/cellules-privees.php');?>
<?php require('modal/cerveau-collectif.php');?>
<?php require('modal/chasse.php');?>
<?php require('modal/chose-pensante.php');?>
<?php require('modal/citoyen.php');?>
<?php require('modal/civilisation.php');?>
<?php require('modal/comm-anar.php');?>
<?php require('modal/contrat.php');?>
<?php require('modal/convenable.php');?>
<?php require('modal/coutumes.php');?>
<?php require('modal/citoyen.php');?>
<?php require('modal/creation.php');?>
<?php require('modal/credo.php');?>
<?php require('modal/critique.php');?>
<?php require('modal/croyant.php');?>
<?php require('modal/curieux.php');?>
<?php require('modal/democratie-centralisee.php');?>
<?php require('modal/dialectique-totale.php');?>
<?php require('modal/divination.php');?>
<?php require('modal/dogme.php');?>
<?php require('modal/don.php');?>
<?php require('modal/dons-vivants.php');?>
<?php require('modal/economie-politique.php');?>
<?php require('modal/egalite-liberte.php');?>
<?php require('modal/egalite-reactionnaire.php');?>
<?php require('modal/emanation.php');?>
<?php require('modal/esclavage.php');?>
<?php require('modal/espace.php');?>
<?php require('modal/eternite.php');?>
<?php require('modal/ethnies.php');?>
<?php require('modal/etre.php');?>
<?php require('modal/evidence.php');?>
<?php require('modal/existence.php');?>
<?php require('modal/famille-planetaire.php');?>
<?php require('modal/fecondite-travail.php');?>
<?php require('modal/feminin.php');?>
<?php require('modal/feminisme.php');?>
<?php require('modal/fidelite.php');?>
<?php require('modal/fille-mere-nourrice.php');?>
<?php require('modal/fin.php');?>
<?php require('modal/foi.php');?>
<?php require('modal/force-feconde.php');?>
<?php require('modal/frere.php');?>
<?php require('modal/geographie.php');?>
<?php require('modal/grace.php');?>
<?php require('modal/histoire.php');?>
<?php require('modal/historisme.php');?>
<?php require('modal/homme-complet.php');?>
<?php require('modal/honneur.php');?>
<?php require('modal/humaniste.php');?>


<?php require('footer.php');?>