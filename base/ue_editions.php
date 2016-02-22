<?php
if (!defined('_ECRIRE_INC_VERSION')) return;


function ue_editions_declarer_tables_objets_sql($tables){
	$tables['spip_ue_editions'] = array(
	
		'principale' => "oui",
		'field'=> array(
			"id_ue_edition"      => "bigint(21) NOT NULL",
			"titre"              => "tinytext DEFAULT '' NOT NULL",
			"texte"              => "text DEFAULT '' NOT NULL",
            "module_temps_1"     => "text DEFAULT '' NOT NULL",
            "module_temps_2"     => "text DEFAULT '' NOT NULL",
            "module_temps_3"     => "text DEFAULT '' NOT NULL",
            "atelier_temps_1"    => "text DEFAULT '' NOT NULL",
            "atelier_temps_2"    => "text DEFAULT '' NOT NULL",
			"statut"             => "varchar(255) DEFAULT '0' NOT NULL",
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"	=> "id_ue_edition"
		),
		'titre' => "titre",

		'champs_editables' => array(
			"titre", "texte", "module_temps_1", "module_temps_2", "module_temps_3", "atelier_temps_1", "atelier_temps_2"
		),
		
		'champs_contenu' => array(
			"titre", "texte", "module_temps_1", "module_temps_2", "module_temps_3", "atelier_temps_1", "atelier_temps_2"
		),
		
		'statut'=> array(
			array(
				'champ' => 'statut',
				'publie' => 'publie',
				'previsu' => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'statut_textes_instituer' => 	array(
			'prepa' => 'texte_statut_en_cours_redaction',
			'prop' => 'texte_statut_propose_evaluation',
			'publie' => 'texte_statut_publie',
			'refuse' => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'texte_changer_statut' => 'edition:texte_changer_statut'		
	);

	return $tables;
}

function ue_editions_declarer_tables_interfaces($interfaces) {
	$interfaces['table_des_tables']['ue_editions'] = 'ue_editions';
	
	$interfaces['table_des_traitements']['TEXTE'][]= "safehtml(".str_replace("%s","interdit_html(%s)",_TRAITEMENT_RACCOURCIS).")";	

	return $interfaces;
}



?>
