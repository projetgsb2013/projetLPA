
<?php
require_once('./vues/vue_formulaireNouveauClient.php');
require_once('./modeles/animal.php');
$action=$_REQUEST['action'];
switch($action){
    case 'ajouterNouvelAnimal':{
    
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $CP=$_POST['codePostal'];
        $telephone1=$_POST['telephone1'];
        $telephone2=$_POST['telephone2'];
        $client=new client();
        $client->ajoutClient($nom, $prenom, $adresse, $CP, $telephone1, $telephone2);  
    }
        
    
}
?>
