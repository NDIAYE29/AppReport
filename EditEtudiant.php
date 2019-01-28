<?php 
 $id_material=$_GET['id_material'];
 require_once("conn.php");
 $ps=$pdo->prepare("SELECT* FROM materiels WHERE id_material=?");
 $params=array($id_material);
 $ps->execute($params);
 $materiels=$ps->fetch();
 ?>
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


   <center>
   <div class="container" >
<?php require_once("entete.php")?>
<div>
<div class= " panel panel-default">
<div class= "panel-heading">mettre a jour materiel</div>
<div class="panel-body">
   <form method="post" action="UpdateEtudiant.php" enctype="multipart/form-data">
   <div class="form-group">
<label class="control-label">category: <?php echo($materiels['id_material'])?></label>
<input type="hidden" name="category" value="<?php echo($materiels['category'])?>" class="form-control"/>
   </div>
   <div class="form-group">
<label class="control-label">lieu:</label>
<input type="text" name="lieu" value="<?php echo($materiels['lieu'])?>" class="form-control"/>
   </div>
   <div class="form-group">
<label class="control-label">date:</label>
<input type="text" name="date_sent"value="<?php echo($materiels['date_sent'])?> " class="form-control"/>
   </div>
   <div class="form-group">
<label class="control-label">code:</label>
<input type="text" name="code"value="<?php echo($materiels['code'])?> " class="form-control"/>
   </div>
   <div class="form-group">
<label class="control-label">message:</label>
<input type="text" name="message"value="<?php echo($materiels['message'])?> " class="form-control"/>
   </div>
   <div class="form-group">
<label class="control-label">image:</label>
<input type="file" name="image" class="form-control"/>
<img src="images/<?php echo($materiels['image']) ?>" width="100" height="100"/>

   </div>
   <button type="submit">Enregistrer</button>
   <div>
   </div>
   </form>
</div>
</div>
</div>

</body>
</html>
