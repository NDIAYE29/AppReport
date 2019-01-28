<html>
  <head>
    <title>suppression de donnees en PHP :: partie 1</title>
	<link href="css/style2.css" rel="stylesheet" type="text/css">
    <script language="javascript">
      function confirme( identifiant )
      {
        var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
	if( confirmation )
	{
	  document.location.href = "suppression2.php?id="+identifiant ;
	}
      }
    </script>
  </head>
<body>
  <?php
    //connection au serveur:
    require_once("conn.php");
    $req="SELECT * FROM utilisateur  ORDER BY nom,username,email,mdp,role";
    $ps=$pdo->prepare($req);
    $ps->execute();
    $ps=$pdo->prepare($req) ;
        $requete =$ps->execute();
	      
 
    //ex�cution de la requ�te:
    
    echo "<form action='modification2.php' method='Post' name='insertion' enctype='multipart/form-data'>";
    echo "<table width=100% border=1 align=center>";
	echo "<tr bgcolor='#F0FFff'>";
      echo "<td colspan=10><h2 align=center>Changement Membres</td>";
      echo "</tr>";

      echo "<tr align=center bgcolor=#F0FFff>";
      echo "<td><h4 class='h41'>nom</td>";
      echo "<td><h4 class='h41'>username</td>";
      
      echo "<td><h4 class='h41'>email</td>";
      echo "<td><h4 class='h41'>mdp</td>";
      
	  echo "<td><h4 class='h41'>profil</td>";
	  echo "<td><h4 class='h41'>modification</td>";
      echo "</tr>";?>
 
    
    <tbody>
    <?php while($et=$ps->fetch()){ ?>
    <tr> <td width=152> <?php echo ($et['nom']) ?> </td>
         <td width=152><?php echo ($et['username']) ?> </td>
         <td width=152><?php echo ($et['email']) ?> </td>
         <td width=152><?php echo ($et['mdp']) ?> </td>
         <td width=152><?php echo ($et['role']) ?> </td>
	   <td><button>
     <a onclick="return confirm('etes vous sure..?');"  href="suppression2.php?id= <?php echo ($et['id']) ?>\">supprimer</a></button><br> 


     

	   </tr>
     <?php } ?>
	   </table>
	   
	   
    
    </form>
    
  
  <a href="menu.html"><img src="images/back.png" width=30 height=30  style="margin-left:25px" >
</a>
</body>
</html>

