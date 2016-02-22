<?php
if (!defined('_ECRIRE_INC_VERSION')) return;


function ue_editions_upgrade($nom_meta_base_version, $version_cible){

    $maj = array();
	$maj['create'] = array(
		array('maj_tables', array('spip_ue_editions')),
	);
	$maj['1.1.0'] = array(
		array('maj_tables', array('spip_ue_editions')),
	);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

function ue_editions_vider_tables($nom_meta_base_version) {
	sql_drop_table("spip_ue_editions");
	effacer_meta($nom_meta_base_version);
}

?>
