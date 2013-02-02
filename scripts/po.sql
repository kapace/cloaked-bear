DROP TABLE IF EXISTS purchases;
CREATE TABLE purchases
(
`id` VARCHAR(3) NOT NULL PRIMARY KEY,
`productname` VARCHAR(64) NOT NULL,
`productstatus` CHAR(1) NOT NULL,
`productdate` DATE NOT NULL,
`quantity` INT NOT NULL,
`reorderpoint` INT,
`reorderqty` INT,
`supplierno` VARCHAR(4) NOT NULL
);

INSERT INTO purchases VALUES ('001', 'Handheld Portal Device', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO purchases VALUES ('002', 'Replusion Gel', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO purchases VALUES ('003', 'Propulsion Gel', 'D', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO purchases VALUES ('004', 'Conversion Gel', 'A', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO purchases VALUES ('005', 'Weighted Storage Cube', 'D', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO purchases VALUES ('006', 'Weighted Companion Cube', 'A', '2012-01-01', 100, 20, 100, '3456');
INSERT INTO purchases VALUES ('007', '1500 Megawatt Heavy Duty Super-Colliding Super Button', 'A', '2012-01-01', 100, 20, 100, '3456');
INSERT INTO purchases VALUES ('008', 'Edgeless Safety Cube Receptacle', 'D', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO purchases VALUES ('009', 'Safety Cube', 'D', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO purchases VALUES ('010', 'Weighted Pivot Cube', 'A', '2012-01-01', 100, 20, 100, '1234');
INSERT INTO purchases VALUES ('011', 'Thermal Discouragement Beam Generator', 'A', '2012-01-01', 100, 20, 100, '2345');
INSERT INTO purchases VALUES ('012', 'High Energy Pellet', 'A', '2012-01-01', 100, 20, 100, '3456');
