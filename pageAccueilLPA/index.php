<!--
premier essai pour la page d'accueil
-->
<?php
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'navigationBarreAccueil';
}
$uc=$_REQUEST['uc'];
switch($uc){
    
    case'navigationBarreAccueil':{
        
        include("controleurs/c_navigationBarreAccueil.php");break;
}
    case'gererClients':{
        
        include("controleurs/c_gererClients.php");break;
    }
        
}
?>