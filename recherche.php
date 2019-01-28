<html>

<head>

<title>Rechercher</title>
<link href="http:\\127.0.0.1\contoleur\css\style2.css" rel="stylesheet" type="text/css">

</head>

<body>  

<?php
require_once("conn.php");
$req="SELECT * FROM materiels";
$ps=$pdo->prepare($req);
$ps->execute();
$ps=$pdo->prepare($req) ;
    $requete =$ps->execute();
	$totenreg=$ps->rowCount();
?>
<?php
	
	echo "<form action='editeRech.php' method='post' name='editer' enctype='multipart/form-data'>";
    
    if ($totenreg==0)
      echo "<td colspan=9 align=center bgcolor='#CCFF00'><h2>IL N'Y A PAS DE MATERIEL A RECHERCHER</td>";
    else if (!(empty($_POST["recherche"])))
    {
      echo "<table width=100% border=1 align=center>";
      echo "<tr bgcolor='#CCFF00'>";
      echo "<td colspan=10><h2 align=center>RECHERCHE MATERIELS</td>";
      echo "</tr>";

      echo "<tr align=center bgcolor=white>";
      //echo "<td><h4 class='h41'>nom</td>";
      //echo "<td><h4 class='h41'>prenom</td>";
     // echo "<td><h4 class='h41'>email</td>";
      echo "<td><h4 class='h41'>category</td>";
      echo "<td><h4 class='h41'>lieu</td>";
      echo "<td><h4 class='h41'>date_sent</td>";
	  echo "<td><h4 class='h41'>code</td>";
	  echo "<td><h4 class='h41'>user_fk</td>";
	  echo "<td><h4 class='h41'>image</td>";
	  echo "<td><h4 class='h41'>message</td>";
	  //echo "<td><h4 class='h41'>COCHER</td>";
      echo "</tr>";
      $i=0;
      while($et=$ps->fetch())
      {
	   if (stristr($et[$_POST["choix"]], $_POST["recherche"]))
        {
		
          if ($i==0)
          {
            echo "<tr bgcolor=white>";
            $i++;
          }
          else
          {
            echo "<tr bgcolor=white>";
            $i--;
          }
          //echo "<td><h5>".$row["nom"]."</td>";
          //echo "<td><h5>".$row["prenom"]."</td>";
         // echo "<td><h5>".$row["email"]."</td>";
          echo "<td><h5>".$et["category"]."</td>";
          echo "<td><h5>".$et["lieu"]."</td>";
          echo "<td><h5>".$et["date_sent"]."</td>";
		  echo "<td><h5>".$et["code"]."</td>";
		  echo "<td><h5>".$et["user_fk"]."</td>";
		  echo "<td><h5>".$et["image"]."</td>";
		  echo "<td><h5>".$et["message"]."</td>";
          echo "<td align=center><h5><input type='checkbox' name='type[]' value=".$et["category"]."></td>";
          echo "</tr>";
        }
      }
      echo "</table>";
	   echo "<br><br>";
      echo "<table width=50% align=center>";
      echo "<tr>";
      //echo "<td align=center><input class='bouton' type='submit' name='Suivant' value='Suivant'></td>";
      //echo "<td align=center><input class='bouton' type='reset' name='Effacer' value='Effacer'></td>";
      echo "</tr>";
  	  echo "</table>";
    }
      else
	  echo "<h4>Veuillez remplir le champ recherche !";
      echo "</form>";
  ?>
 <!-- <button  bgcolor="#CCFF00" onClick="window.open('menu.html','main')">Retour</button> 
  <!--<a href="menu.html"><img src="../images/back.png" width=30 height=30  style="margin-left:25px" >
</a> -->

</body>

</html>
