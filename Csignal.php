<html>
<head>
 
 <title>saisie materiels</title>
   <link href="css/design.css" rel="stylesheet" type="text/css" >   
   <link href="css/designformu.css" rel="stylesheet" type="text/css" >   
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../css/myStyle.css"/>
 </head>


<body>
<div class="body1">
  <div class="main">
  
    <!--header -->
	<div class="bannierefinal">  
	</div>
	
	</div>
	</div>  
	<div class="main_principal">

   
    <div class="header">
			<center>
			<br><br><br>
				<nav class="mn">
        <ul id="mn">
          <li > <a href="AccueilMembre.php" class="but6"><span class="" style="">retour</span></a></li>
          <li > <a href="deconnexion.php" class="but6"><span class="" style="">deconnecter</span></a></li>
		</ul>
</nav>
<div class="image">     

<div class="image5"> <a href="AccueilMembre.php"><img src="images/back.png" width=50 height=50  style="margin-left:20px"> 
</a></div>
<div class="image6"> <a href="deconnexion.php" ><img src="images2/1.jpg" width=50 height=50  style="margin-left:34px"> </a></div>
		</div>
	</center>
			</div>	

<div>
<div class= " panel panel-default">
<div class= "panel-heading">

   <h3> LA SIGNALISATION  
     </h3></div>
   <center>
   <div class="container" >


<?php require_once("entete.php")?>
<!-- <div>
<div class= " panel panel-default">
<div class= "panel-heading">Saisie materiels</div>-->
<div class="panel-body">
   <form method="post" action="insertionM.php" enctype="multipart/form-data">
   <div class="form-group">
   <span class="glyphicon glyphicon-minus"></span>
<label class="control-label">category:</label>
<div style="float:center;width:100%;">
					<select type="text" name="category" style="font-size:15px" class="form-control" id="txt_type"required/>
<option value="0">Choisissez un type  materiel</option>
<option name="armoire"  >ARMOIRE</option>
<option name="a">Armoire coulissante</option><option name="3"  >Armoire de rangement</option>
<option name="2"  >Armoire basse de rangement</option><option name="5"  >CABLE</option>
<option name="6"  >Cable d'alimentation</option><option name="7"  >CHAISE </option>
</option><option name="8"  >Chaise accoudoirs</option><option name="9"  >Chaise a bureau</option>
<option name="10"  >Chaise etudiant</option><option name="11"  >Chaise en tissu</option>
<option name="12">Chaise avec tablette</option><option name="13"  >Climatiseur</option>
<option name="14"  >Chaise en tissu</option> <option name="15"  >Climatiseur</option>
<option name="16"  >Clim bureau</option><option name="17"  >Disque dur</option>
<option name="18"  >Eclairage</option><option name="19"  >ECRAN </option><option name="20">Ecran fixe de projection</option>
<option name="21"  >Ecran mobile</option><option name="22"  >Ecran d'ordinateur</option>
<option name="23"  >Fauteuil fixe accoudoirs</option><option name="24">Fauteuil pivotant sans accoudoirs</option>
<option name="25"  >Fauteuil pivotant avec accoudoirs</option><option name="26"  >Fauteuil presid</option>
<option name="27"  >IMPRIMANTE</option><option name="28"  >Imprimante HP</option>
<option name="29"  >ordinateur portable</option><option name="30"  >PORTE</option>
<option name="31"  >Porte bureau n*niveau</option><option name="32"  >Porte toilette RDC batiment</option>
<option name="33"  >Porte salle n*</option><option name="34">Porte coulissante</option>
<option name="35"  >Porte automatique</option><option name="36"  >Rallonge</option>
<option name="37"  >TABLE</option><option name="38"  >Table bureau</option>
 <option name="39">Table bureau avec caisson</option><option name="40"  >Table bureau avec retour</option>
 <option name="41"  >Tringles rideaux</option>
 
<option name="42">Video projecteur</option></select>
</div>
   </div>
   <div class="form-group">
   <span class="glyphicon glyphicon-minus"></span>
<label class="control-label">lieu:</label>
<input type="text" name="lieu" class="form-control"/>
   </div>
   <div class="form-group">
   <span class="glyphicon glyphicon-minus"></span>
<label class="control-label">date_sent:</label>
<input type="date" name="date_sent" class="form-control"/>
   </div>
   <div class="form-group">
   <span class="glyphicon glyphicon-minus"></span>
<label class="control-label">code:</label>
<input type="text" name="code" class="form-control"/>
   </div>

   <div class="form-group">
   <span class="glyphicons glyphicon-asterisk"></span> 
<label class="control-label">image:</label>
<input type="file" name="image" class="form-control"/>
</div>
<div class="form-group">
<span class="glyphicon glyphicon-pencil"></span>
<label class="control-label">message:</label>
<textarea class="form-control" rows="6" placeholder="contenu du message...
" name="message" required/></textarea>
   </div>

   </div>
  <!-- <button type="submit">Envoyer</button>
   <button ><input type="reset" value="Effacer"></button>
				<button ><input type="submit" value="Envoyer"></button>-->
            <td><input type='submit' name='envoyer' value='Envoyer'/> </td>
<td><input type='reset' name='effacer' value='Effacer'/> </td></tr>
   <div>
   </div>
   </form>
</div>
</div>
</div>

</body>
</html>
