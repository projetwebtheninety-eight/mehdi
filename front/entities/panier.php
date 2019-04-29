<?PHP
class panier{
	private $id;
	private $quantite;


	function __construct($id,$quantite){
		$this->id=$id;
		$this->quantite=$quantite;

	}
	
	function getid(){
		return $this->id;
	}
	function getquantite(){
		return $this->quantite;
	}


	function setid($nom){
		$this->id=$id;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

}

?>