<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "eepcollect".
 *
 * Auto generated 05-05-2015 13:47
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Pagecollector',
	'description' => 'Visitors can collect pages and add them to their own favorit-list like a basket in a shop. Inclusiv delete and sort functions. (Merkliste, Merkzettel, Seite merken, Inhalte sammeln -> http://pagecollector.enobe.de)',
	'category' => 'fe',
	'version' => '1.0.16',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => 'uploads/tx_eepcollect',
	'clearcacheonload' => false,
	'loadOrder' => '',
	'TYPO3_version' => '6.2.0-7.99.99',
	'PHP_version' => '5.3.0-5.5.99',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'constraints' => array (
		'depends' => array (
			'typo3' => '6.2.0-7.99.99',
			'php' => '5.3.0-5.5.99',
		),
		'conflicts' => array (
		),
		'suggests' => array (
		),
	),
	'author' => 'Joerg Kummer',
	'author_email' => 'typo3 et enobe dot de',
	'author_company' => '',
);