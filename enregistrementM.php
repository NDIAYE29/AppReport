<?php
require_once("conn.php");
$req="SELECT * FROM materiels";
$ps=$pdo->prepare($req);
$ps->execute();
$ps=$pdo->prepare($req) ;
    $requete =$ps->execute();
	$totenreg=$ps->rowCount();
?>
<html>
<head>
<title></title>
<!--<link rel="stylesheet" type="text/css" href="../css/myStyle.css"/>-->
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
 <body>
 
 <div class="col-md-6 col-xs-12">
 <div class="panel panel-info spacer">
 <!--<div class="panel-heading"> liste des materiels</div>-->
 <!-- <div class="panel-body"> contenu </div> -->
 </div>
 <form action='modification2.php' method='Post' name='insertion' enctype='multipart/form-data'>
    <table width=100% border=1 align=center>
	
	
	 <?php
    echo"<tr bgcolor='red'>";
	if ($totenreg==0)
     echo" <td colspan=10 align=center ><h2 > IL N'Y A PAS de Materiel(s) signales</td>";
       else
    { 
	echo"<td colspan=9 align=center><h2>Il y a ".$totenreg." Materiel(S) Signales</td>";
      echo"</tr>";
    
      echo "<tr align=center bgcolor=white>";
      //echo "<td><h4 class='h41'>nom</td>";
     // echo "<td><h4 class='h41'>prenom</td>";
     // echo "<td><h4 class='h41'>email</td>";
      echo "<td><h4 class='h41'>category</td>";
      echo "<td><h4 class='h41'>lieu</td>";
      echo "<td><h4 class='h41'>date_sent</td>";
	  echo "<td><h4 class='h41'>code</td>";
	  //echo "<td><h4 class='h41'>idUtilisateur</td>";
	  echo "<td><h4 class='h41'>message</td>";
	  echo "<td><h4 class='h41'>image</td>";
	  echo "<td ><h4 class='h41'>COCHER</td>";
      echo "</tr>";     } ?>
    
       <tbody>
       <?php while($et=$ps->fetch()){ ?>
       <tr> <td width=152> <?php echo ($et['category']) ?> </td>
            <td width=152><?php echo ($et['lieu']) ?> </td>
            <td width=152><?php echo ($et['date_sent']) ?> </td>
            <td width=152><?php echo ($et['code']) ?> </td>
            <td width=152><?php echo ($et['message']) ?> </td>
           <td width=152> <img src="images/<?php echo($et['image']) ?>" width="100" height="100"/></td>
            <!--<td><img src="images/ " width="100" height="100"></td>-->
            <td><a href="EditEtudiant.php?id_material= <?php echo ($et['id_material']) ?>">Edit</a> </td>
            <td><a onclick="return confirm('etes vous sure..?');" href="SupprimeEtudiant.php?id_material= <?php echo ($et['id_material']) ?>">Supprimer</a> </td>
        </tr>
        <?php } ?>
        <center>
        <a href="index_rechercher.html"  target="blank"><span>Rechercher Materiel </span></a> 
        <a href="index_rechercher.html"><img src="images2/rech.png" width=30 height=30  style="margin-left:25px">
</a> <br><br></center></div>
       </tbody>
     </table>
     </div>
  </body>
</html>


