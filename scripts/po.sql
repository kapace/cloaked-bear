DROP TABLE IF EXISTS purchases;
CREATE TABLE purchases
(
`productid` VARCHAR(4) NOT NULL PRIMARY KEY,
`productname` VARCHAR(64) NOT NULL,
`productstatus` VARCHAR(8) NOT NULL,
`productdate` DATE NOT NULL,
`quantity` INT NOT NULL,
`reorderpoint` VARCHAR(16),
`reorderqty` INT,
`supplierno` VARCHAR(4) NOT NULL
);

INSERT INTO customers VALUES ('abc', '0001', '0001', 'asdf', 100, '2012-01-01');
INSERT INTO customers VALUES ('def', '0002', '0002', 'fasdf', 100, '2012-02-20');
INSERT INTO customers VALUES ('gas', '0003', '0003', 'zxcv', 100, '2012-03-29');
INSERT INTO customers VALUES ('asd', '0004', '0004', 'werw', 100,  '2012-03-29');
INSERT INTO customers VALUES ('aaa', '0005', '0005', 'hkkj', 100, '2012-03-29');
INSERT INTO customers VALUES ('vvv', '0006', '0006', 'fsdf', 100, '2012-03-29');
INSERT INTO customers VALUES ('bbb', '0007', '0007', 'fzx', 100, '2012-03-29');
INSERT INTO customers VALUES ('ccc', '0008', '0008', 'gasdf', 100, '2012-03-29');
INSERT INTO customers VALUES ('ddd', '0009', '0009', 'as', 100, '2012-03-29');
INSERT INTO customers VALUES ('eee', '0010', '0010', 'uioyi', 100, '2012-03-29');
INSERT INTO customers VALUES ('qqq', '0011', '0011', 'hjkg', 100, '2012-03-29');
INSERT INTO customers VALUES ('ttt', '0012', '0012', 'jkg', 100, '2012-03-29');
