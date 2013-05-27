<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>MENU ADMINISTRATEUR</title>
    </head>
    <body>
        <h1 id="titre_principal">MENU ADMINISTRATION</h1>
        <div id="barre">
        <ul>
            <li><a href="index.php?uc=navigationBarreAccueil&action=vueMenuAdmin">ADMINISTRATION</a></li>
            <li><a href="index.php?uc=navigationBarreAccueil&action=vueFormulaireNouveauClient">NOUVEAU CLIENT</a></li>
            <li><a href="index.php?uc=navigationBarreAccueil&action=vueNouvelAnimal">NOUVEL ANIMAL</a></li>
            <li><a href="index.php?uc=navigationBarreAccueil&action=vueNouvelleEntree">NOUVELLE ENTREE</a></li>
        </ul>
           
        </div>	
		<h2 id="sousTitre">Cliquer sur l'image pour visualiser les opérations du jour</h2>
		<div id="imageFond">
			<a href="index.php?uc=navigationBarreAccueil&action=vuePageAccueil"><img src="image/logo_lpa.png" alt="image_du_fond"></a>
		</div>

        <?php
        // put your code here
        ?>
    </body>
</html>
