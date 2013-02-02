DROP TABLE IF EXISTS accounts;
CREATE TABLE accounts 
(
`id` DECIMAL(3) NOT NULL PRIMARY KEY,
`account_date` DATE,
`account_name` varchar(80),
`account_status` varchar(80)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (100, '2013-01-01', 'aaa', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (101, '2013-01-01', 'bbb', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (102, '2013-01-01', 'ccc', 'D');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (200, '2013-01-01', 'ddd', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (220, '2013-01-01', 'eee', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (300, '2013-01-01', 'fff', 'D');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (333, '2013-01-01', 'ggg', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (334, '2013-01-01', 'hhh', 'A');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (400, '2013-01-01', 'iii', 'D');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (401, '2013-01-01', 'jjj', 'D');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (402, '2013-01-01', 'kkk', 'D');
INSERT INTO accounts (account_id, account_date, account_name,account_status) 
	VALUES (403, '2013-01-01', 'lll', 'A');