DROP TABLE IF EXISTS `inventory`;
DROP TABLE IF EXISTS `customers`;
DROP TABLE IF EXISTS `orders`;

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `itype` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `flight` varchar(20) DEFAULT NULL,
  `flightprice` int(10) DEFAULT NULL,
  `seating` varchar(20) DEFAULT NULL,
  `seatprice` int(10) DEFAULT NULL,
  `rentalcar` varchar(20) DEFAULT NULL,
  `carprice` int(10) DEFAULT NULL,
  `parking` varchar(20) DEFAULT NULL,
  `parkingprice` int(10) DEFAULT NULL,
  primary key (id));
  
INSERT INTO customers (username, password) VALUES
	('cscott71', 'test');
	
INSERT INTO orders (username, flight, flightprice, seating, seatprice, rentalcar, carprice, parking, parkingprice) VALUES
	('cscott71', 'Alabama', '150', 'First Class', '200', 'SUV_Rental_Car', '300', 'VIP', '180');


INSERT INTO inventory (itype, name, price) VALUES
	('flight', 'Alabama', '150'),
	('flight', 'Alaska', '1000'),
	('flight', 'Arizona', '700'),
	('flight', 'Arkansas', '400'),
	('flight', 'California', '800'),
	('flight', 'Colorado', '450'),
	('flight', 'Connecticut', '200'),
	('flight', 'Delaware', '210'),
	('flight', 'Florida', '125'),
	('flight', 'Georgia', '0'),
	('flight', 'Hawaii', '1100'),
	('flight', 'Idaho', '525'),
	('flight', 'Illinois', '210'),
	('flight', 'Indiana', '250'),
	('flight', 'Iowa', '220'),
	('flight', 'Kansas', '275'),
	('flight', 'Kentucky', '250'),
	('flight', 'Louisiana', '150'),
	('flight', 'Maine', '325'),
	('flight', 'Maryland', '325'),
	('flight', 'Massachusetts', '300'),
	('flight', 'Michigan', '425'),
	('flight', 'Minnesota', '350'),
	('flight', 'Mississippi', '250'),
	('flight', 'Missouri', '200'),
	('flight', 'Montana', '300'),
	('flight', 'Nebraska', '400'),
	('flight', 'Nevada', '350'),
	('flight', 'New_Hampshire', '250'),
	('flight', 'New_Jersey', '250'),
	('flight', 'New_Mexico', '350'),
	('flight', 'New_York', '450'),
	('flight', 'North_Carolina', '125'),
	('flight', 'North_Dakota', '300'),
	('flight', 'Ohio', '250'),
	('flight', 'Oklahoma', '250'),
	('flight', 'Oregon', '650'),
	('flight', 'Pennsylvania', '350'),
	('flight', 'Rhode_Island', '250'),
	('flight', 'South_Carolina', '150'),
	('flight', 'South_Dakota', '375'),
	('flight', 'Tennessee', '150'),
	('flight', 'Texas', '500'),
	('flight', 'Utah', '520'),
	('flight', 'Vermont', '210'),
	('flight', 'Virginia', '180'),
	('flight', 'Washington', '500'),
	('flight', 'West Virginia', '350'),
	('flight', 'Wisconsin', '250'),
	('flight', 'Wyoming', '350'),
	('car', 'SUV_Rental_Car', '300'),
	('car', 'Compact_Rental_Car', '150'),
	('car', 'Midsize_Rental_Car', '200'),
	('car', 'Luxury_Rental_Car', '500');