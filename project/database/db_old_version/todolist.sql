PRAGMA foreign_keys = on;
.mode columns
.headers on
.nullvalue NULL

BEGIN TRANSACTION;

-- Table: Category
DROP TABLE IF EXISTS Category;

CREATE TABLE Category (
    ID        INTEGER PRIMARY KEY AUTOINCREMENT,
    Name      STRING,
    Color,
    ProjectID INTEGER REFERENCES Project (ID),
    UserID            REFERENCES User (ID) 
);


-- Table: List
DROP TABLE IF EXISTS List;

CREATE TABLE List (
    ID         INTEGER PRIMARY KEY AUTOINCREMENT,
    Name       STRING,
    isArchived BOOLEAN NOT NULL,
    idCategory INTEGER REFERENCES UserCategory (ID),
    idProject  INTEGER REFERENCES Project (ID) 
);


-- Table: Project
DROP TABLE IF EXISTS Project;

CREATE TABLE Project (
    ID          INTEGER PRIMARY KEY AUTOINCREMENT,
    Name        STRING  NOT NULL,
    Description TEXT    NOT NULL,
    Color       STRING,
    isArchived  BOOLEAN NOT NULL
);


-- Table: ProjectUser
DROP TABLE IF EXISTS ProjectUser;

CREATE TABLE ProjectUser (
    idUser    INTEGER REFERENCES User (ID),
    idProject INTEGER REFERENCES Project (ID),
    PRIMARY KEY (
        idUser,
        idProject
    )
);


-- Table: Task
DROP TABLE IF EXISTS Task;

CREATE TABLE Task (
    ID     INTEGER PRIMARY KEY AUTOINCREMENT,
    idList INTEGER REFERENCES List (ID),
    Name   STRING  NOT NULL,
    Level  INTEGER,
    Date   DATE
);


-- Table: User
DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID       INTEGER       PRIMARY KEY AUTOINCREMENT,
    Username STRING        UNIQUE
                           NOT NULL,
    Password VARCHAR (256) NOT NULL,
    Name     STRING        NOT NULL,
    Email    STRING        NOT NULL,
    Photo    STRING
);


COMMIT TRANSACTION;
