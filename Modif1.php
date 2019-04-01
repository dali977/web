<?php  

include "reclamations.php";
        $recl=new reclamations();
	$msg=$recl->VuReclamaion($_POST["id"]);

	if($msg='ok')  
	{  
		echo 'Reclamation updated';  
	}  
	else 
	{
		echo 'Reclamation cannot be updated';
	}

	header('Location: ../views/tableau reclamtion.php')
 ?>