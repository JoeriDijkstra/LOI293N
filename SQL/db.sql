-- Setup Database
CREATE DATABASE 293N5;
USE 293N5;

CREATE TABLE Postcode (
    postcode VARCHAR(6),
    adres VARCHAR(255),
    woonplaats VARCHAR(255),
	PRIMARY KEY (postcode)
);

CREATE TABLE Lid (
    lidnummer INT AUTO_INCREMENT,
    naam VARCHAR(255),
    voornaam VARCHAR(255),
    postcode VARCHAR(6),
    huisnummer VARCHAR(16),
	PRIMARY KEY(lidnummer),
	FOREIGN KEY (postcode) REFERENCES Postcode(postcode)
);

CREATE TABLE Telefoonnummer (
    telefoonnummer INT,
    lidnummer INT,
	PRIMARY KEY (telefoonnummer),
	FOREIGN KEY (lidnummer) REFERENCES Lid(lidnummer) ON DELETE CASCADE
);

CREATE TABLE Email (
    email VARCHAR(255),
    lidnummer INT,
	PRIMARY KEY (email),
	FOREIGN KEY (lidnummer) REFERENCES Lid(lidnummer) ON DELETE CASCADE
);

-- User 1
INSERT IGNORE INTO Postcode VALUES (
    '1000AA',
    'Privet Drive',
    'London'
);

INSERT INTO `Lid` VALUES (
    1, -- Auto Increment
    'Potter',
    'Harry',
    '1000AA',
    4
);

INSERT INTO `Telefoonnummer` VALUES (
    0612345678,
    1
);

INSERT INTO `Email` VALUES (
    'harrypotter@hogwarts.uk',
    1
);

-- User 2
INSERT IGNORE INTO Postcode VALUES (
    '1234BC',
    'Lordvessel',
    'Kiln of the first flame'
);

INSERT INTO `Lid` VALUES (
    2, -- Auto Increment
    'Gwin',
    'Lord of Cinder',
    '1234BC',
    1
);

INSERT INTO `Telefoonnummer` VALUES (
    0623456789,
    2
);

INSERT INTO `Email` VALUES (
    'gwyn@lord.soul',
    2
);

-- User 3
INSERT IGNORE INTO Postcode VALUES (
    '5444PE',
    'On the dock',
    'Mexico'
);

INSERT INTO `Lid` VALUES (
    3, -- Auto Increment
    'Sparrow',
    'Jack',
    '5444PE',
    5435
);

INSERT INTO `Telefoonnummer` VALUES (
    0624426780,
    3
);

INSERT INTO `Email` VALUES (
    'jack@sparrow.pirate',
    3
);

CREATE USER 'webuser'@localhost IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON 293N5.* TO 'webuser'@localhost;
FLUSH PRIVILEGES;