<?php
Class Agence{
    /***************************** Attributs *****************************/
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;

    /********************************Accesseurs **************************/
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function getModeRestauration()
    {
        return $this->_modeRestauration;
    }

    public function setModeRestauration($modeRestauration)
    {
        $this->_modeRestauration = $modeRestauration;
    }

    /*********************** Constructeur *********************************/

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

    /********************************Methode *****************************/

    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
    public function toString(){
        return "Nom : ".$this->getNom()."\tAdresse : ".$this->getAdresse().
                "\nCode Postal : ".$this->getCodePostal()."\tVille : ".$this->getVille().
                "\nMode de restauration : ".$this->getModeRestauration();
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

}