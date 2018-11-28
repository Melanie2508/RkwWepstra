<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "rkw_wepstra"
 *
 * Auto generated by Extension Builder 2015-11-11
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RKW Wepstra',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Maximilian Fäßler',
	'author_email' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '7.6.6',
	'constraints' => array(
		'depends' => array(
            'extbase' => '6.2.0-7.6.99',
            'fluid' => '6.2.0-7.6.99',
            'typo3' => '6.2.0-7.6.99',
            'rkw_registration' => '7.6.10-7.6.99',
			'rkw_basics' => '7.6.10-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);