CREATE TABLE `rep_data` (
  `rep_id` int(11) auto_increment,
  `rep_name` varchar(255) NOT NULL,
  `rep_phone_number` varchar(255) NOT NULL,
  `rep_branch` varchar(255) NOT NULL,
  `rep_email` varchar(255) NOT NULL,
  `rep_payroll_code` varchar(255) NOT NULL,
  PRIMARY KEY  (`rep_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `staff_data` (
  `staff_id` int(11) auto_increment,
  `staff_name` varchar(255) NOT NULL,
  `staff_phone_number` varchar(255) NOT NULL,
  `staff_branch` varchar(255) NOT NULL,
  `staff_dob` varchar(255) NOT NULL,
  `staff_doa` varchar(255) NOT NULL,
  PRIMARY KEY  (`staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;