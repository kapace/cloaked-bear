DROP TABLE IF EXISTS customers;
CREATE TABLE customers
(
`id` VARCHAR(3) NOT NULL PRIMARY KEY,
`name` VARCHAR(64) NOT NULL,
`status` VARCHAR(1) NOT NULL
);

INSERT INTO customers VALUES ('abc', 'Tom', 'A');
INSERT INTO customers VALUES ('def', 'Tom', 'A');
INSERT INTO customers VALUES ('gas', 'Tom', 'A');
INSERT INTO customers VALUES ('asd', 'Tom', 'A');
INSERT INTO customers VALUES ('aaa', 'Tom', 'A');
INSERT INTO customers VALUES ('vvv', 'Tom', 'A');
INSERT INTO customers VALUES ('bbb', 'Tom', 'A');
INSERT INTO customers VALUES ('ccc', 'Tom', 'A');
INSERT INTO customers VALUES ('ddd', 'Tom', 'A');
INSERT INTO customers VALUES ('eee', 'Tom', 'A');
INSERT INTO customers VALUES ('qqq', 'Tom', 'A');
INSERT INTO customers VALUES ('ttt', 'Tom', 'A');
