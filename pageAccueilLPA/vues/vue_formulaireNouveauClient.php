<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="stylesheet" href="./style/style.css" />-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AJOUTER UN NOUVEAU CLIENT</title>
    </head>
    <body>
        
       <form method='POST' action='index.php?uc=gererClients&action=insererClient'>
          

	<h2>ENREGISTREZ UN NOUVEAU CLIENT</h2>
        <form method='POST' action='index.php?uc=gererClients=insererClient'>
    <input id="nom" name="nom" type="text" class="text-field" placeholder="Nom" /><br><br>
    <input id="prenom" name="prenom" type="text" class="text-field" placeholder="Prenom" /><br><br>
    <input id="adresse" name="adresse" type="text" class="text-field" placeholder="Adresse" /><br><br>
    <input id="codePostal" name="codePostal" type="text" class="text-field" placeholder="Code Postal" /><br><br>
    <input id="ville" name="ville" type="text" class="text-field" placeholder="Ville" /><br><br>
    <input id="telephone1" name="telephone1" type="text" class="text-field" placeholder="Téléphone 1" /><br><br>
    
    <input id="telephone2" name="telephone2" type="text" class="text-field" placeholder="Téléphone 2" /><br><br>
    
    
   
   
    </form>  
   
    <input type="submit" value="Enregistrer" class="button" />


      
    
       

       
    </body>
</html>
