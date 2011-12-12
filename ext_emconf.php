<?php

########################################################################
# Extension Manager/Repository config file for ext "newsauthor".
#
# Auto generated 12-12-2011 18:54
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Add FE-/BE-Users as news authors',
	'description' => 'Make it possible to select a FE- or BE-User as author for ext:news',
	'category' => 'fe',
	'author' => 'Georg Ringer',
	'author_email' => 'typo3@ringerge.org',
	'shy' => '',
	'dependencies' => 'extbase,fluid,news',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '',
			'fluid' => '',
			'news' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"6a50";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"4a62";s:14:"ext_tables.sql";s:4:"f6e9";s:16:"locallang_db.xml";s:4:"f187";s:19:"doc/wizard_form.dat";s:4:"ea93";s:20:"doc/wizard_form.html";s:4:"a45b";}',
);

?>