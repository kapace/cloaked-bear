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
	VALUES ('001', 'LolWatDuck', 'A', '2011.12.16');
INSERT INTO invoices (id, name, status)
	VALUES ('002', 'WatDuck', 'D', '2012.05.28');
INSERT INTO invoices (id, name, status)
	VALUES ('003', 'Wheatley', 'A', '2013.01.02');
INSERT INTO invoices (id, name, status)
	VALUES ('004', 'Qwerty', 'A', '2013.04.16');
INSERT INTO invoices (id, name, status)
	VALUES ('005', 'Asdf', 'D', '2010.08.15');
INSERT INTO invoices (id, name, status)
	VALUES ('006', 'Iop', 'A', '2006.05.14');
INSERT INTO invoices (id, name, status)
	VALUES ('007', 'Blk', 'A', '2013.04.25');
INSERT INTO invoices (id, name, status)
	VALUES ('008', 'Rew', 'D', '2004.09.27');
INSERT INTO invoices (id, name, status)
	VALUES ('009', 'Jkl', 'A', '2012.03.03');
INSERT INTO invoices (id, name, status)
	VALUES ('010', 'Yui', 'A', '2010.06.13');
INSERT INTO invoices (id, name, status)
	VALUES ('011', 'Zxc', 'D', '2012.07.11');
INSERT INTO invoices (id, name, status)
	VALUES ('012', 'Wer', 'A', '2007.08.19');
