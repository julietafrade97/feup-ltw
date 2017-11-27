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
    Color     INTEGER,
    ProjectID INTEGER REFERENCES Project (ID),
    UserID    INTEGER REFERENCES User (ID) 
);

-- Table: List
DROP TABLE IF EXISTS List;

CREATE TABLE List (
    ID         INTEGER PRIMARY KEY AUTOINCREMENT,
    Name       STRING,
    isArchived BOOLEAN NOT NULL
                       DEFAULT FALSE
);

-- Table: ListCategory
DROP TABLE IF EXISTS ListCategory;

CREATE TABLE ListCategory (
    idCategory INTEGER REFERENCES Category (ID),
    idList     INTEGER REFERENCES List (ID),
     PRIMARY KEY (
        idCategory,
        idList
    )
);

-- Table: Project
DROP TABLE IF EXISTS Project;

CREATE TABLE Project (
    ID          INTEGER PRIMARY KEY AUTOINCREMENT,
    Name        STRING  NOT NULL,
    Description TEXT    NOT NULL,
    Color       STRING,
    isArchived  BOOLEAN NOT NULL
                        DEFAULT FALSE
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
    ID       INTEGER   PRIMARY KEY AUTOINCREMENT,
    Username STRING    UNIQUE
                       NOT NULL,
    Password CHAR (256) NOT NULL,
    Name     STRING,
    Email    STRING    NOT NULL
                       UNIQUE,
    Photo    STRING
);

COMMIT TRANSACTION;
