<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

/* pour que le pipeline ne rale pas ! */
function editions_autoriser(){}

/**
 * Autorisation a modifier un atelier
 *
 * @param unknown_type $faire
 * @param unknown_type $quoi
 * @param unknown_type $id
 * @param unknown_type $qui
 * @param unknown_type $opts
 * @return unknown
 */
function autoriser_ue_edition_modifier($faire,$quoi,$id,$qui,$opts){
	if ($qui['statut']=='0minirezo' AND !$qui['restreint'])
		return true;
	return false;
}


?>
