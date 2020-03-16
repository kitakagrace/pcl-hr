CREATE TABLE `rep_data` (
  `rep_id` int(11) auto_increment,
  `rep_name` varchar(255) NOT NULL,
  `rep_phone_number` varchar(255) NOT NULL,
  `rep_branch` varchar(255) NOT NULL,
  `rep_email` varchar(255) NOT NULL,
  `rep_payroll_code` varchar(255) NOT NULL,
  PRIMARY KEY  (`rep_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;