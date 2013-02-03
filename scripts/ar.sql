DROP TABLE IF EXISTS customers;
CREATE TABLE customers
(
`id` VARCHAR(3) NOT NULL PRIMARY KEY,
`name` VARCHAR(64) NOT NULL,
`status` VARCHAR(1) NOT NULL
);

INSERT INTO customers VALUES ('aaa', 'Allen', 'A');
INSERT INTO customers VALUES ('bbb', 'Betty', 'A');
INSERT INTO customers VALUES ('ccc', 'Chris', 'A');
INSERT INTO customers VALUES ('ddd', 'Dan', 'A');
INSERT INTO customers VALUES ('eee', 'Edward', 'D');
INSERT INTO customers VALUES ('fff', 'Fred', 'D');
INSERT INTO customers VALUES ('ggg', 'George', 'A');
INSERT INTO customers VALUES ('hhh', 'Hardy', 'A');
INSERT INTO customers VALUES ('iii', 'Ingrid', 'D');
INSERT INTO customers VALUES ('jjj', 'Jake', 'A');
INSERT INTO customers VALUES ('kkk', 'Kate', 'D');
INSERT INTO customers VALUES ('lll', 'Luke', 'A');
