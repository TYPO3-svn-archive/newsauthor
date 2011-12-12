<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'tx_newsauthor_be_users' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:newsauthor/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_newsauthor_be_users',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'be_users',
			'foreign_table_where' => 'ORDER BY be_users.username',
			'size' => 5,
			'minitems' => 0,
			'maxitems' => 5,
			'MM' => 'tx_news_domain_model_news_tx_newsauthor_be_users_mm',
		)
	),
	'tx_newsauthor_fe_users' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:newsauthor/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_newsauthor_fe_users',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'fe_users',
			'foreign_table_where' => 'ORDER BY fe_users.uid',
			'size' => 5,
			'minitems' => 0,
			'maxitems' => 5,
			'MM' => 'tx_news_domain_model_news_tx_newsauthor_fe_users_mm',
		)
	),
);


t3lib_div::loadTCA('tx_news_domain_model_news');
t3lib_extMgm::addTCAcolumns('tx_news_domain_model_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_news_domain_model_news','tx_newsauthor_be_users;;;;1-1-1, tx_newsauthor_fe_users');


/***************
 * Default TypoScript
 */
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Newsauthors');

?>