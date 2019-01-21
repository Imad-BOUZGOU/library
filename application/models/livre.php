
<?php



class Livre
{
	private $auteur;
	private $titre;
	private $reference;
	private $genre;
	private $id;

	function __construct($id , $titre ,$reference,$genre,$auteur)
	{

		$this->id = $id;
        $this->titre = $titre;
        $this->reference = $reference;
        $this->genre = $genre;
        $this->auteur = $auteur;

    }


	public function getAuteur(){
		return $this->auteur;
	}

	public function getReference(){
		return $this->reference;
	}

	public function getGenre(){
		return $this->genre;
	}
	public function getTitre(){
		return $this->titre;
	}



	public function getId(){
		return $this->id;
	}

}