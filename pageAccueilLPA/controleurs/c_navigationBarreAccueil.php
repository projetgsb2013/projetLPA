<?php
// PAR DEFAUT : VUE PAGE D'ACCUEUIL
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'vuePageAccueil';
}
$action=$_REQUEST['action'];
switch($action){
    
    case 'vuePageAccueil':{
        
        include("vues/vue_accueil.php");
        break;
    }
    
    case 'vueMenuAdmin':{
        include("vues/vue_menuAdmin.php");
        break;
    
        }
    case 'vueFormulaireNouveauClient':{
        
        include("vues/vue_formulaireNouveauClient.php");
        break;
    
    
    }
    case 'vueNouvelleEntree':{
        
        include("vues/vue_nouveauClient.php");
        break;
    }
    
    case 'vueNouvelAnimal':{
        
        include("vues/vue_formulaireNouvelAnimal.php");
        break;
    }
    


}
?>
