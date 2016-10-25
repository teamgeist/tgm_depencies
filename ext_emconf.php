<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tgm_depencies"
 *
 * Generated 2015-07-30
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TgM Depencies',
	'description' => 'Installiert TgM Standard-Extensions',
	'category' => 'plugin',
	'author' => 'Steffen Thierock',
	'author_email' => 'st@teamgeist-medien.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.1.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6',
			'gridelements' => '3.2.0',
			'realurl' => '2.1.0',
			't3jquery' => '3.0.2',
			'cl_jquery_fancybox' =>'4.0.0',
			'iconfont' => '',
			'tgm_copyright' => '',
			'cookieconsent2' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);