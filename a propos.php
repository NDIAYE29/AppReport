<!DOCTYPE html>
<html lang="en">
<head>
<title>a propos</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/variete.js"></script>



<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">#menu a, .bg, .bg2, #ContactForm a {behavior:url("../js/PIE.htc")}</style>
<![endif]-->

	
	
	<script type="text/javascript">
var idDivAffichee=null;
 
function afficheId(baliseId)
{
  if (idDivAffichee)
  {
    cacheId(baliseId);
  }
   if (idDivAffichee)
    cacheId(idDivAffichee);
   
  if (idDivAffichee==baliseId)
   {
      var show=false;
      idDivAffichee=null;
   }
    else
    {
      var show=true;
      idDivAffichee=baliseId;
    }
   
 
  if (show && document.getElementById && document.getElementById(baliseId) != null)
  {
     document.getElementById(baliseId).style.visibility='visible';
     document.getElementById(baliseId).style.display='block';
      
  }
}
 
function cacheId(baliseId)
{
  if (document.getElementById && document.getElementById(baliseId) !=  null)
  {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
  }
}    </script>
</head>
<body>
<div class="body1">
  <div class="main">
  
    <!--header -->
	<div class="bannierefinal">  
	</div>
	
    <header>
	
      <div class="wrapper">
        <nav>
          <ul id="menu">
       <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="a propos.php">a propos</a></li>
            <li><a href="controleur/AccueilMembre.php">Connexion</a></li>
          </ul>
        </nav>
      </div>
	  
      <div class="slider_bg">
        <div class="slider">
         <ul class="items">
            <li><img src="images2/slide1.jpg" class="mg"alt="slide 4">
			</li>
            <li><img src="images2/slide2.jpg"  alt=""></li>
            <li><img src="images2/slide4.jpg" ></li>
			<li><img src="images2/slide5.jpg" ></li>
        
          </ul>
        </div>
      </div>
	  
    </header>
	</div>
	</div>
	
	
	
	    <div class="main_principal">
		<h2  class="title" align="middle"> BIENVENUE DANS LA PAGE INFOS DU App-report</h2>
	      <div class="clear"/>
 <span class="but3 left1"  onclick="javascript:afficheId('l1');"><h3>armoire</h3></span>
    	<span class="but3"  onclick="javascript:afficheId('l2');"><h3>climatiseur</h3></span>
		<span class="but3"  onclick="javascript:afficheId('l3');"> <h3>video projecteur </h3></span>
		<span class="but3"  onclick="javascript:afficheId('l4');"> <h3>porte </h3></span>
		
	<div class="table"  id="l1" >
		
	<img src="images2/armoire2.jpg" class="mg" alt="Image verte"  width="350" height="250"  style="float:right;"/> 		

    <div>
	<br/><br/><br/><br/><br/>
	1</br>	TYPES : Armoire</br>
		NOM DE l'armoire : armoire a rangement </br>
Armoire fermant à clé : à l'aide d'une clé </br>ou d'un code intégré à la porte de</br> l'armoire, il s'agit d'un modèle</br> d'armoire idéal pour stocker ses</br> documents de manière sécurisée. </br>Une armoire fermant à clé</br> est le meuble de rangement </br>idéal pour les fonctions en </br>entreprises qui travaillent sur des </br>projets confidentiels.</br>
- Armoire basse de bureau : il s'agit d'une armoire</br> de bureau de taille basse</br> (de moins d'un mètre de hauteur, </br>aux alentours de 75 cm). </br>

<a href="doc/descriptionMateriel.pdf"  target="blank"><span>Lire la suite</span></a> 
<h2  class="title" align="middle"> OBJECTIFS App-report</h2>
<h3  class="title" align="middle"> 1-Objectif globale</h3>

À qui s’adresse la signalisation  a temps réel des materiels defectueux?
Les systèmes informatiques temps réel se différencient des autres systèmes informatiques par la prise en compte de contraintes temporelles dont le respect est aussi important que l'exactitude du résultat, autrement dit le système ne doit pas simplement délivrer des résultats exacts, il doit les délivrer dans des délais imposés.
C’est pour cela que notre application App-report prend en compte que Tout étudiant ou autres est tenu à l'obligation d'affichage d'un certain nombre d'informations dans son établissement ; par exemple signalisation des matériels défectueux en temps réel  


     
    </div>  
	</div>
	
	<div class="mil" id="l2">
	<img src="images2/cl.jpg" class="mg" width="350" height="250" style="float:right;"/>
	<div class="left1">
		<br/><br/><br/><br/><br/>

1</br> TYPES : Climatiseur </br>clim </br>
Le positionnement des unités intérieures</br> comme extérieures est une chose</br> à ne pas prendre à la légère car </br>cela pourrait avoir </br>des conséquences directes sur l’efficacité</br> de votre installation mais aussi</br> sur votre tranquillité quotidienne.</br>

Nous vous conseillons de placer </br>l’unité extérieure à un endroit protégé </br>du soleil mais aussi des grosses </br>bourrasques de vent .Il faut</br> également avoir à l’esprit que le</br> bruit engendré par cet appareil</br> peut devenir peut-être gênant si</br> ce dernier est placé sous des</br> fenêtres de chambres par exemple.</br>





<a href="doc/descriptionMateriel.pdf"  target="blank"><span>Lire la suite</span></a> 
<h2  class="title" align="middle"> OBJECTIFS App-report</h2>
<h3  class="title" align="middle"> 1-Objectif globale</h3>

À qui s’adresse la signalisation  a temps réel des materiels defectueux?
Les systèmes informatiques temps réel se différencient des autres systèmes informatiques par la prise en compte de contraintes temporelles dont le respect est aussi important que l'exactitude du résultat, autrement dit le système ne doit pas simplement délivrer des résultats exacts, il doit les délivrer dans des délais imposés.
C’est pour cela que notre application App-report prend en compte que Tout étudiant ou autres est tenu à l'obligation d'affichage d'un certain nombre d'informations dans son établissement ; par exemple signalisation des matériels défectueux en temps réel
        
    </div>
	<script type="text/javascript">
    //<!--
        cacheId('l2');
    //-->
    </script>
	</div>
	
	<div class="mais" id="l3">
	
	<img src="images2/video.jpg"   class="mg" width="350" height="250" style="float:right;"/>
    <div id="l3" >
	<div class="left1">
		<br/><br/><br/><br/><br/>

		1 </br>TYPES : Video projecteur</br>
Principales caractéristiques :</br>

- Résolution Full HD 1080p</br>
- Technologie 3LCD sans effet « arc-en-ciel »</br>
- Un taux de contraste élevé jusqu'à 35 000:1</br>
- Taille d'image jusqu'à 332 pouces</br>
- Un support 2D et 3D </br>(lunettes Active Shutter 3D non comprise)</br>
- Interpolation d'images / Image Enhancement</br>
- Conversion 2D à 3D</br>
- 2 entrées HDMI
- Haut-parleur 5W</br> intégré
- Technologie Miracast</br> (sur le modèle EH-TW5350 uniquement)</br>
- Fonction Split Screen </br>(sur le modèle EH-TW5350 uniquement)</br>

<a href="../doc/descriptionMateriel.pdf"  target="blank"><span>Lire la suite</span></a> 
<h2  class="title" align="middle"> OBJECTIFS App-report</h2>
<h3  class="title" align="middle"> 1-Objectif globale</h3>

À qui s’adresse la signalisation  a temps réel des materiels defectueux?
Les systèmes informatiques temps réel se différencient des autres systèmes informatiques par la prise en compte de contraintes temporelles dont le respect est aussi important que l'exactitude du résultat, autrement dit le système ne doit pas simplement délivrer des résultats exacts, il doit les délivrer dans des délais imposés.
C’est pour cela que notre application App-report prend en compte que Tout étudiant ou autres est tenu à l'obligation d'affichage d'un certain nombre d'informations dans son établissement ; par exemple signalisation des matériels défectueux en temps réel 


 

    </div>
	<script type="text/javascript">
    //<!--
        cacheId('l3');
    //-->
    </script>
	</div>

	
	

		<script type="text/javascript">
    //<!--
        afficheId('l1');
    //-->
    </script>
	</div>
	</div>
	
	
	<div id="footer">
        <span><br>Design by © All Rights Reserved octobre 2018</span>
        </div>	 
       
	   

 <!-- /main -->
     </div>  

</body>
</html>