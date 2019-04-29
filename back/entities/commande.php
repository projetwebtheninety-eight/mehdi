<?PHP
class commande{
	private $reference;
	private $total;
	function __construct($reference,$total){
		$this->idcommande=$idcommande;
		$this->total=$total;

	}
	
	function getidcommande(){
		return $this->idcommande;
	}
	function gettotal(){
		return $this->total;
	}

	function setidcommande($idcommande){
		$this->idcommande=$idcommande;
	}
	function settotal($total){
		$this->total;
	}

}

?>