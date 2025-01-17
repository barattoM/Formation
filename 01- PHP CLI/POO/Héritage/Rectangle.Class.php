<?php

 Class Rectangle {
	/***************************************** Attributs **********************************************/

	private $_longueur ;
	private $_largeur ;

	/***************************************** Accesseurs **********************************************/
	
	public function getLongueur()
	{
		return $this->_longueur;
	}

	public function setLongueur($longueur)
	{
		$this->_longueur = $longueur;
	}
	public function getLargeur()
	{
		return $this->_largeur;
	}

	public function setLargeur($largeur)
	{
		$this->_largeur = $largeur;
	}

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/***************************************** Methode **********************************************/

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return $this->afficheRectangle();
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*        -1 si le 1er est <
	*
	* @param [type] obj1
	* @param [type] obj2
	* @return void
	*/
	public function compareTo(){
		return "";
	}

	public function aire(){
		return $this->getLargeur()*$this->getLongueur();
	}

	public function estCarre(){
		return $this->getLargeur()==$this->getLongueur();
	}

	public function afficheRectangle(){
		return 	"Longueur : ".$this->getLongueur()." Largeur : ".$this->getLargeur()
				."\nPérimètre : ".$this->perimetre()." Aire : ".$this->aire();
	}

	public function perimetre(){
		return ($this->getLargeur()+$this->getLongueur())*2;
	}

}