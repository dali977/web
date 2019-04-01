<?php  

include "reclamations.php";
        $recl=new reclamations();
	$msg=$recl->SuppReclamaion($_POST["id"]);

	if($msg='ok')  
	{  
		echo 'Data Deleted';  
	}  
	else 
	{
		echo 'Data cannot be deleted';
	}
	