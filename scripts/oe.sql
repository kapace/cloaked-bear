DROP TABLE IF EXISTS invoices;
CREATE TABLE invoices
(
`id` varchar(3) NOT NULL,
`name` varchar(80),
`status` varchar(1),
`date` varchar(10),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO invoices (id, name, status)
	VALUES ('LWD', 'LolWatDuck', 'A', '2011.12.16');
INSERT INTO invoices (id, name, status)
	VALUES ('WD', 'WatDuck', 'D', '2012.05.28');
INSERT INTO invoices (id, name, status)
	VALUES ('W', 'Wheatley', 'A', '2013.01.02');
