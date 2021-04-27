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
<?php require('modal/ame-personnelle.php');?>  
<?php require('modal/ami.php');?>   
<?php require('modal/ancestral.php');?> 
<?php require('modal/assume.php');?>
<?php require('modal/attentif.php');?>
<?php require('modal/auteur.php');?>
<?php require('modal/autodidacte.php');?>
<?php require('modal/bel-ouvrage.php');?>
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
<?php require('modal/creation-intellectuelle.php');?>
<?php require('modal/credo.php');?>
<?php require('modal/critique.php');?>
<?php require('modal/croyant.php');?>
<?php require('modal/curieux.php');?>
<?php require('modal/democratie-centralisee.php');?>
<?php require('modal/destin.php');?>
<?php require('modal/dialectique-totale.php');?>
<?php require('modal/divination.php');?>
<?php require('modal/dogme.php');?>
<?php require('modal/don.php');?>
<?php require('modal/dons-vivants.php');?>
<?php require('modal/economie-politique.php');?>
<?php require('modal/egalite-liberte.php');?>
<?php require('modal/egalite-reactionnaire.php');?>
<?php require('modal/emanation.php');?>
<?php require('modal/emanation-vitale.php');?>
<?php require('modal/esclavage.php');?>
<?php require('modal/espace.php');?>
<?php require('modal/esprit.php');?>
<?php require('modal/etat.php');?>
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
<?php require('modal/fille.php');?>
<?php require('modal/fin.php');?>
<?php require('modal/foi.php');?>
<?php require('modal/force-feconde.php');?>
<?php require('modal/frere.php');?>
<?php require('modal/gens.php');?>
<?php require('modal/geographie.php');?>
<?php require('modal/grace.php');?>
<?php require('modal/histoire.php');?>
<?php require('modal/historisme.php');?>
<?php require('modal/homme-complet.php');?>
<?php require('modal/honneur.php');?>
<?php require('modal/humaniste.php');?>
<?php require('modal/humanite.php');?>
<?php require('modal/ideal-anarchiste.php');?>
<?php require('modal/idolatre.php');?>
<?php require('modal/humaniste.php');?>
<?php require('modal/imagination.php');?>
<?php require('modal/imperatif-moral.php');?>
<?php require('modal/inities.php');?>
<?php require('modal/intello.php');?>
<?php require('modal/inventif.php');?>
<?php require('modal/jugement.php');?>
<?php require('modal/liberte-revolutionnaire.php');?>
<?php require('modal/libre-arbitre.php');?>
<?php require('modal/loi.php');?>
<?php require('modal/magie.php');?>
<?php require('modal/maitre.php');?>
<?php require('modal/marche.php');?>
<?php require('modal/marcottage.php');?>
<?php require('modal/maritalat.php');?>
<?php require('modal/masculin.php');?>
<?php require('modal/masculinisme.php');?>
<?php require('modal/materialiste.php');?>
<?php require('modal/matiere-esprit.php');?>
<?php require('modal/matriarcat.php');?>
<?php require('modal/memoire.php');?>
<?php require('modal/meneur.php');?>
<?php require('modal/mere.php');?>
<?php require('modal/mere-fondamentale.php');?>
<?php require('modal/merite.php');?>
<?php require('modal/moeurs.php');?>
<?php require('modal/morale.php');?>
<?php require('modal/mouvement.php');?>
<?php require('modal/moyen.php');?>
<?php require('modal/mystere.php');?>
<?php require('modal/mythe.php');?>
<?php require('modal/nation-phare.php');?>
<?php require('modal/naturaliste.php');?>
<?php require('modal/nature-humanite.php');?>
<?php require('modal/nourrice.php');?>
<?php require('modal/neant1.php');?>
<?php require('modal/neant2.php');?>
<?php require('modal/necessite.php');?>
<?php require('modal/observance.php');?>
<?php require('modal/organes-publics.php');?>
<?php require('modal/parents.php');?>
<?php require('modal/patience.php');?>
<?php require('modal/patrie-celeste.php');?>
<?php require('modal/pere.php');?>
<?php require('modal/pere-supreme.php');?>
<?php require('modal/personnalisme.php');?>
<?php require('modal/peuple-bijou.php');?>
<?php require('modal/peuple-humain.php');?>
<?php require('modal/plan.php');?>
<?php require('modal/planete.php');?>
<?php require('modal/policee.php');?>
<?php require('modal/preceptes.php');?>
<?php require('modal/precis.php');?>
<?php require('modal/predestination.php');?>
<?php require('modal/principe.php');?>
<?php require('modal/promesse.php');?>
<?php require('modal/propitiation.php');?>
<?php require('modal/proprio.php');?>
<?php require('modal/prudence.php');?>
<?php require('modal/puissances.php');?>
<?php require('modal/pur-impur.php');?>
<?php require('modal/raison.php');?>
<?php require('modal/rapport.php');?>
<?php require('modal/realiste.php');?>
<?php require('modal/realisme-vrai.php');?>
<?php require('modal/religion.php');?>
<?php require('modal/responsable.php');?>
<?php require('modal/reve-communiste.php');?>
<?php require('modal/rites.php');?>
<?php require('modal/sagesse.php');?>
<?php require('modal/saint-bon-integre.php');?>
<?php require('modal/salut.php');?>
<?php require('modal/sang.php');?>
<?php require('modal/sauvage.php');?>
<?php require('modal/secret.php');?>
<?php require('modal/science-du-neuf.php');?>
<?php require('modal/sociable.php');?>
<?php require('modal/societe-de-personnes.php');?>
<?php require('modal/sol.php');?>
<?php require('modal/sorciers.php');?>
<?php require('modal/spiritualiste.php');?>
<?php require('modal/systeme-de-choses.php');?>
<?php require('modal/tabou.php');?>
<?php require('modal/taches.php');?>
<?php require('modal/temps.php');?>
<?php require('modal/terre-promise.php');?>
<?php require('modal/territoires.php');?>
<?php require('modal/theorie.php');?>
<?php require('modal/tout-nouveau-peuple.php');?>
<?php require('modal/tradition.php');?>
<?php require('modal/tranquille.php');?>
<?php require('modal/travail-fecondite.php');?>
<?php require('modal/union-sociale.php');?>
<?php require('modal/voiant.php');?>
<?php require('modal/volontariat-gratuite.php');?>
<?php require('modal/voue.php');?>
<?php require('modal/voues.php');?>

<?php require('footer.php');?>
    