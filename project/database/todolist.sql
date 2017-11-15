PRAGMA foreign_keys = on;
.mode columns
.headers on
.nullvalue NULL

DROP TABLE IF EXISTS User;
CREATE TABLE User (
    ID       INTEGER PRIMARY KEY,
    Username STRING  UNIQUE
                     NOT NULL,
    Password VARCHAR(256) NOT NULL,
    Name     STRING  NOT NULL,
    Email    STRING  NOT NULL,
    Photo    STRING
);

DROP TABLE IF EXISTS Category;
CREATE TABLE Category (
    ID    INTEGER PRIMARY KEY,
    Name  STRING  NOT NULL,
    Color STRING
);

DROP TABLE IF EXISTS Project;
CREATE TABLE Project (
    ID          INTEGER PRIMARY KEY,
    Name        STRING  NOT NULL,
    Description TEXT    NOT NULL,
    Color       STRING,
    isArchived  BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS List;
CREATE TABLE List (
    ID         INTEGER PRIMARY KEY,
    Name       STRING,
    isArchived BOOLEAN NOT NULL,
    idCategory INTEGER REFERENCES Category (ID),
    idProject  INTEGER REFERENCES Project (ID)
);

DROP TABLE IF EXISTS Task;
CREATE TABLE Task (
    ID     INTEGER PRIMARY KEY,
    idList INTEGER REFERENCES List (ID),
    Name   STRING  NOT NULL,
    Level  INTEGER,
    Date   DATE
);

DROP TABLE IF EXISTS UserList;
CREATE TABLE UserList (
    UserID INTEGER REFERENCES User (ID),
    ListID INTEGER REFERENCES List (ID),
    PRIMARY KEY (
        UserID,
        ListID
    )
);

DROP TABLE IF EXISTS ProjectUser;
CREATE TABLE ProjectUser (
    idUser    INTEGER REFERENCES User (ID),
    idProject INTEGER REFERENCES Project (ID),
    PRIMARY KEY (
	idUser,
	idProject
    )
);
