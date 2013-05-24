
<?php
require_once('./vues/vue_formulaireNouveauClient.php');
require_once('./modeles/client.php');
//include('classPDO.php');
$action=$_REQUEST['action'];
switch($action){
    
    case 'insererClient':{
        
        
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $CP=$_POST['codePostal'];
        $ville=$_POST['ville'];
        $telephone1=$_POST['telephone1'];
        $telephone2=$_POST['telephone2'];
      
        $client=new client();
        $client->ajoutClient($nom, $prenom, $adresse, $CP, $ville, $telephone1, $telephone2);
        
        break;
        
        
        
        
    }
    case 'ajouterDansClientEntrée':
    {
        $option=$_POST['option'];
        if($_POST['option']=="Entrée"){
            
            include('./vues/vue_nouveauClientEntree.php');
            
        }
        break;
    }
    

        
        
    
}
?>
