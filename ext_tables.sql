#
# Table structure for table 'tx_news_domain_model_news_tx_newsauthor_be_users_mm'
# 
#
CREATE TABLE tx_news_domain_model_news_tx_newsauthor_be_users_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'tx_news_domain_model_news_tx_newsauthor_fe_users_mm'
# 
#
CREATE TABLE tx_news_domain_model_news_tx_newsauthor_fe_users_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	tx_newsauthor_be_users int(11) DEFAULT '0' NOT NULL,
	tx_newsauthor_fe_users int(11) DEFAULT '0' NOT NULL
);