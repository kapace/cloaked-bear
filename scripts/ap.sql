DROP TABLE IF EXISTS vendors;
CREATE TABLE vendors
(
`id` varchar(3) NOT NULL,
`name` varchar(80),
`status` varchar(1),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO vendors (id, name, status)
	VALUES ('000', 'LolWatDuck', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('111', 'WatDuck', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('123', 'Wheatley', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('382', 'Chell', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('819', 'Lemongrab', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('100', 'Finn', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('102', 'Batman', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('101', 'Superman', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('888', 'Nickelback', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('230', 'Euler', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('657', 'Lagrange', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('334', 'Albert Wei', 'D');
