DROP TABLE IF EXISTS vendors;
CREATE TABLE vendors 
(
`id` varchar(3) NOT NULL,
`name` varchar(80),
`status` varchar(1),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO vendors (id, name, status)
	VALUES ('LWD', 'LolWatDuck', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('WD', 'WatDuck', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('W', 'Wheatley', 'A');
