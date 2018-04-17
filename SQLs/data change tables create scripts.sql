CREATE TABLE `sun_datachange_type` (
  `dc_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `dc_type` varchar(155) NOT NULL COMMENT 'employee who updated the data',
  `active` tinyint(5) NOT NULL DEFAULT '1' COMMENT '0 = inactive, 1 = active',
  PRIMARY KEY (`dc_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE `sun_datachange_requested` (
  `dcr_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'The node identifier of a webform.',
  `dc_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The unique identifier for this submission.',
  `dc_type_id` int(11) NOT NULL COMMENT 'The submitted value of this field, may be serialized for some components.',
  `dc_type` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`dcr_id`),
  KEY `nid` (`dcr_id`),
  KEY `sid_nid` (`dc_id`,`dcr_id`),
  KEY `data` (`dc_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='Stores all submitted field data for webform submissions.';


CREATE TABLE `sun_datachange_records` (
  `dc_id` int(11) NOT NULL AUTO_INCREMENT,
  `for_uid` int(10) NOT NULL,
  `requested_by_uid` int(10) NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `submit_time` int(11) NOT NULL,
  PRIMARY KEY (`dc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

CREATE TABLE `sun_datachange_data` (
  `dcd_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'The node identifier of a webform.',
  `dc_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The unique identifier for this submission.',
  `field_name` varchar(125) DEFAULT '0' COMMENT 'The identifier for this component within this node, starts at 0 for each node.',
  `data` mediumtext NOT NULL COMMENT 'The submitted value of this field, may be serialized for some components.',
  PRIMARY KEY (`dcd_id`),
  KEY `nid` (`dcd_id`),
  KEY `sid_nid` (`dc_id`,`dcd_id`),
  KEY `data` (`data`(64))
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='Stores all submitted field data for webform submissions.';
