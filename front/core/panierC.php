<?PHP
include "../config.php";
class panierC {
function afficherEmploye ($panier){
		echo "id: ".$panier->getid()."<br>";
		echo "quantite: ".$panier->getquantite()."<br>";

	}
	
	
	function ajouterEmploye($panier){
		$sql="insert into panier(id,quantite) values (:id, :quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$panier->getid();
        $quantite=$panier->getquantite();

		$req->bindValue(':id',$id);
		$req->bindValue(':quantite',$quantite);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($id){
		$sql="DELETE FROM panier where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($panier,$id){
		$sql="UPDATE panier SET id=:id, quantiter=:quantite WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$panier->getid();
        $quantite=$panier->getquantite();

		$datas = array(':id'=>$id, ':quantite'=>$quantite);
		$req->bindValue(':id',$id);
		$req->bindValue(':quantite',$quantite);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($id){
		$sql="SELECT * from panier where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

}

?>