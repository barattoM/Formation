<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (login,nomUtilisateur,prenomUtilisateur,motDePasse,role,idMatiere) VALUES (:login,:nomUtilisateur,:prenomUtilisateur,:motDePasse,:role,:idMatiere)");
		$q->bindValue(":login", $obj->getLogin());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":role", $obj->getRole());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET idUtilisateur=:idUtilisateur,login=:login,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,motDePasse=:motDePasse,role=:role,idMatiere=:idMatiere WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":login", $obj->getLogin());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":role", $obj->getRole());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}

	public static function getByPseudo($pseudo)
    {
        $db = DbConnect::getDb();
        if (!in_array(";", str_split($pseudo))) {
            $q = $db->query('SELECT * FROM Utilisateurs WHERE login="' . $pseudo . '"');
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false) {
                return new Utilisateurs($results);
            } else {
                return false;
            }
        }
        else{
            return false;
        }
    }

}