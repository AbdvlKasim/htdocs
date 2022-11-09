CREATE OR REPLACE TABLE Student
(
    Student_ID              SMALLINT UNIQUE AUTO_INCREMENT,
    Fornavn                 VARCHAR(30)     NOT NULL,
    Etternavn               VARCHAR(30)     NOT NULL,
    Mobilnummer             INTEGER         NOT NULL,
    Epost                   VARCHAR(255)    NOT NULL,
    Passord                 VARCHAR(255)    NOT NULL,
    Adresse                 VARCHAR(100)     NOT NULL,
    Postnummer              SMALLINT        NOT NULL,
    CONSTRAINT PRIMARY KEY (Student_ID)
);

CREATE OR REPLACE TABLE Leietaker
(
    Leietaker_ID            SMALLINT UNIQUE AUTO_INCREMENT,
    Leietaker_Fornavn       VARCHAR(30)     NOT NULL,
    Leietaker_Etternavn     VARCHAR(30)     NOT NULL,
    Leietaker_Mobilnummer   INTEGER         NOT NULL,
    Leietaker_Epost         VARCHAR(255)    NOT NULL,
    Leietaker_Passord       VARCHAR(255)    NOT NULL,
    Leietaker_Adresse       VARCHAR(100)    NOT NULL,
    Leietaker_Postnummer    SMALLINT        NOT NULL,
    CONSTRAINT PRIMARY KEY (Leietaker_ID)
);

CREATE OR REPLACE TABLE Annonse
(
    Annonse_ID              SMALLINT UNIQUE AUTO_INCREMENT,
    Annonse_Navn            VARCHAR(100)    NOT NULL,
    Annonse_Beskrivelse     VARCHAR(500)    NOT NULL,
    Student_ID              SMALLINT        NOT NULL,
    Leietaker_ID            SMALLINT        NOT NULL,
    Annonse_Status_ID       SMALLINT        NOT NULL,
    CONSTRAINT PRIMARY KEY (Annonse_ID)
);

CREATE OR REPLACE TABLE Bolig
(
    Bolig_ID               SMALLINT UNIQUE AUTO_INCREMENT,
    Bolig_Navn             VARCHAR(100),
    Bolig_Adresse          VARCHAR(100),
    Annonse_ID             SMALLINT        NOT NULL, 
    CONSTRAINT PRIMARY KEY (Bolig_ID)
)

CREATE OR REPLACE TABLE Varslinger
(
    Varsling_ID              SMALLINT UNIQUE AUTO_INCREMENT,
    Brukere                  VARCHAR(100),
    Anonnse_Status_ID        SMALLINT        NOT NULL,
    Student_ID               SMALLINT        NOT NULL, 
    Leietaker_ID             SMALLINT        NOT NULL, 
    CONSTRAINT PRIMARY KEY (Varsling_ID)
)

CREATE OR REPLACE TABLE Annonse_Status
(
    Annonse_Status_ID           SMALLINT UNIQUE AUTO_INCREMENT,
    Annonse_ID                  SMALLINT NOT NULL,
    Foresporsel_ID              SMALLINT NOT NULL,
    Akseptert                   BOOLEAN          , 
    CONSTRAINT PRIMARY KEY (Annonse_Status_ID)
)

INSERT INTO Annonse_Status (Annonse_Status_ID, Annonse_ID, Foresporsel_ID, Akseptert)
VALUES (1, 2, 3, 1)

INSERT INTO Varslinger (Varsling_ID, Brukere, Annonse_Status_ID, Student_ID, Leietaker_ID)
VALUES (1, 'Berat', 2, 1, 1)

INSERT INTO Bolig (Bolig_ID, Bolig_Navn, Bolig_Adresse, Annonse_ID)
VALUES (1, 'Berat', 'Tinnheiveien 29', 2)

INSERT INTO Leietaker(Leietaker_ID, Leietaker_Fornavn, Leietaker_Etternavn, Leietaker_Mobilnummer, Leietaker_Epost, Leietaker_Passord, Leietaker_Adresse, Leietaker_Postnummer)
VALUES(1, 'Ømer', 'Fener', 41384997, )

INSERT INTO Annonse (Annonse_ID, Annonse_Navn, Annonse_Beskrivelse, Student_ID, Leietaker_ID, Annonse_Status_ID)
VALUES(1, 'Fin hybel over slettheia', 'meget fin hybel godt plassert i hjertet av slettheia', 1, 1, 1) 







