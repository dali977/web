<?PHP
include "../conx.php";
class reclamations {



	function ajouterReclamaion($reclamation){
		$sql="insert into reclamations (nom,email,sujet,message) values (:name,:email,:sujet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $name=$reclamation->getNAME();
        $email=$reclamation->getemail();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
		$req->bindValue(':name',$name);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':sujet',$sujet);

          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

function ajouterSUGG($reclamation){
    $sql="insert into suggestions (email,message) values (:email,:message)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        
        $email=$reclamation->getemail();
       
        $message=$reclamation->getmessage();
    
    $req->bindValue(':email',$email);
    $req->bindValue(':message',$message);
    

          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
    
  }


function afficherreclamtion(){


	$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}
	function afficherSUGG(){


  $sql="SElECT * From suggestions";
    $db = config::getConnexion();
    try{
    $info=$db->query($sql);
    return $info;
    }
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        } 
  }

    function SuppReclamaion($id){
         $var=$id;
        $sql = "DELETE FROM reclamations WHERE ID ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
     function SuppSUGG($id){
         $var=$id;
        $sql = "DELETE FROM suggestions WHERE ID ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }

    function VuReclamaion($id){
         $var=$id;
        $sql = "UPDATE reclamations SET ETAT ='traitee' WHERE ID ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
      function VuSUGG($id){
         $var=$id;
        $sql = "UPDATE suggestions SET ETAT ='lu' WHERE ID ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
}

?>