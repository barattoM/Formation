<?php

//Test UtilisateursManager

// echo "recherche id = 1" . "<br>";
// $obj =UtilisateursManager::findById(2);
// var_dump($obj);
// echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Utilisateurs(["login" => "fafa", "nomUtilisateur" => "faf", "prenomUtilisateur" => "fez", "motDePasse" => "ggs", "role" => 2, "idMatiere" => 2]);
// var_dump(UtilisateursManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = UtilisateursManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setlogin("[(Value)]");
// UtilisateursManager::update($obj);
// $objUpdated = UtilisateursManager::findById(1);
// echo "Liste des objets" . "<br>";
// $array = UtilisateursManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = UtilisateursManager::findById(1);
// UtilisateursManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = UtilisateursManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

echo "recherche login = fafa" . "<br>";
$obj =UtilisateursManager::getByPseudo("fafa");
var_dump($obj);
echo $obj->toString();

?>