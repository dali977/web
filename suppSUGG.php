<?php  

include "reclamations.php";
        $recl=new reclamations();
	$msg=$recl->SuppSUGG($_POST["id"]);

	if($msg='ok')  
	{  
		echo 'Data Deleted';  
	}  
	else 
	{
		echo 'Data cannot be deleted';
	}
	header('Location: ../views/tableau SUGG.php')
 ?>