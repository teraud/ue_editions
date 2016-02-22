<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/actions');
include_spip('inc/editer');


function formulaires_editer_ue_edition_charger_dist($id_ue_edition='new', $retour='', $config_fonc='', $row=array(), $hidden=''){
	$valeurs = formulaires_editer_objet_charger('ue_edition',$id_ue_edition,0,0,$retour,$config_fonc,$row,$hidden);
		
	return $valeurs;
}

function formulaires_editer_ue_edition_verifier_dist($id_ue_edition='new', $retour='', $config_fonc='', $row=array(), $hidden=''){	
	$erreurs = formulaires_editer_objet_verifier('ue_edition', $id_ue_edition, array('titre'));
	
	return $erreurs;
}

function formulaires_editer_ue_edition_traiter_dist($id_ue_edition='new', $retour='', $config_fonc='', $row=array(), $hidden=''){
	$res = formulaires_editer_objet_traiter('ue_edition',$id_ue_edition,0,0,$retour,$config_fonc,$row,$hidden);
	
	return $res;
}


?>
