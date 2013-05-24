
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>NOUVEAU CLIENT ENTREE</title>
    </head>
    <body>
        <form method='POST' action='index.php?uc=gererClients&action=insererClient'>
        <h1> ENREGISTREZ UNE NOUVELLE ENTREE EN FONCTION DU CLIENT DEJA ENREGISTRE </h1>
        
        <?php
                $connexion=mysql_connect('localhost','root',"") or die ("connexion impossible.");
                $db=mysql_select_db('projetlpa',$connexion) or die ("base de données non accessible");
        ?>
        
        <p>Choisissez un client: </p>
                <select name="clients" id="clients">
       
        <?php
                $resultat=mysql_query("select * from client ") or die ("requète non executé");
        
                if (! $resultat) { echo "Erreur requete"; exit;} 
                while ($ligne=mysql_fetch_array($resultat))
                {
        ?>
                
                    <option><?php echo ''.$ligne['nom'].'   '.$ligne['prenom'].'';?> </option>
         
         <?php
         
         $ligne['nom']=$_SESSION['nom'];
         $ligne['prenom']=$_SESSION['prenom'];
          
         
         }
        ?>
                
                
                
                
                <html>
                    
                </html>
                <br>
                <br>
                
                <h1> FORMULAIRE ADHESION CLIENT ENTREE <h1>
                        
                   <br>
                   
                   <input id="sommeVersee" name="sommeVersee" type="text" class="text-field" placeholder="Indiquer la somme versée" /><br><br>
                   <input id="sommmeRendue" name="sommeRendue" type="text" class="text-field" placeholder="Indiquer la somme rendue" /><br><br>
                   <input id="modePaiement" name="modePaiement" type="text" class="text-field" placeholder="Indiquer le mode de Paiement" /><br><br>
                   <input type="submit" value="Enregistrer">
                


        </form>
    </body>
</html>
