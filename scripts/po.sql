DROP TABLE IF EXISTS purchases;
CREATE TABLE purchases
(
`productid` VARCHAR(3) NOT NULL PRIMARY KEY,
`productname` VARCHAR(64) NOT NULL,
`productstatus` CHAR(1) NOT NULL,
`productdate` DATE NOT NULL,
`quantity` INT NOT NULL,
`reorderpoint` INT,
`reorderqty` INT,
`supplierno` VARCHAR(4) NOT NULL
);

INSERT INTO customers VALUES ('001', 'abc', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO customers VALUES ('002', 'bcd', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO customers VALUES ('003', 'cde', 'D', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO customers VALUES ('004', 'def', 'A', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO customers VALUES ('005', 'efg', 'D', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO customers VALUES ('006', 'fgh', 'A', '2012-01-01', 100, 20, 100, '3456');
INSERT INTO customers VALUES ('007', 'ghi', 'A', '2012-01-01', 100, 20, 100, '3456');
INSERT INTO customers VALUES ('008', 'hij', 'D', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO customers VALUES ('009', 'ijk', 'D', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO customers VALUES ('010', 'jkl', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO customers VALUES ('011', 'klm', 'A', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO customers VALUES ('012', 'lmn', 'A', '2012-01-01', 100, 20, 100, '3456');
