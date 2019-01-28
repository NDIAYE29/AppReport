<html>
  <head>
    <title>modification de donn�es en PHP :: partie 1</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
  </head>
<body>
  
    
    <?php
    require_once("conn.php");
    $req="SELECT * FROM utilisateur";
    $ps=$pdo->prepare($req);
    $ps->execute();
    $ps=$pdo->prepare($req) ;
        $requete =$ps->execute();
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
      
	  
	  <td>
	 <button> <a href="modification2.php?id= <?php echo ($et['id']) ?>\">modifier</a></button></td> 
	  
   </tr>
        <?php } ?>
	   </table>
    
    </form>
	   
    
  
  <center>
  
  <button  onClick="window.open('menu.html','main')">Retour</button></center>
</body>
</html>
