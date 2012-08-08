CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `first` varchar(255) NOT NULL default '',
  `last` varchar(255) NOT NULL default '',
  `email` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;