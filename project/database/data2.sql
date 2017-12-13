
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('julietafrade', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Julieta Frade', 'julietafrade@gmail.com', '1.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('sofiasilva', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Sofia Silva', 'sofiasilva@gmail.com',  '2.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('luismartins', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Luis Martins', 'luismartins@gmail.com',  '3.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('diogodores', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Diogo Dores', 'diogodores@gmail.com',  '4.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('afonsoramos', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Afonso Ramos', 'afonsoramos@gmail.com', '5.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('miguelmano', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Miguel Mano', 'miguelmano@gmail.com',  '6.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('joseborges', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Jose Borges', 'joseborges@gmail.com',  '7.jpg');
INSERT INTO User (Username, Password, Name, Email, Photo) VALUES ('carlosfreitas', 'cd882b791d2f3999d17672bfe317683d0989890e5f96b4d4d6df3f4597e03d2d', 'Carlos Freitas', 'carlosfreitas@gmail.com',  '8.jpg');

INSERT INTO Project (Name, Description, isArchived) VALUES ('RCOM', 'Trabalho de RCOM', 'FALSE');
INSERT INTO Project (Name, Description, isArchived) VALUES ('LTW', 'Trabalho de LTW', 'FALSE');
INSERT INTO Project (Name, Description, isArchived) VALUES ('PLOG', 'Trabalho de PLOG', 'FALSE');
INSERT INTO Project (Name, Description, isArchived) VALUES ('LPOO', 'Trabalho de LPOO', 'FALSE');
INSERT INTO Project (Name, Description, isArchived) VALUES ('Jantar de Natal', 'Organização do Jantar de Natal', 'FALSE');

INSERT INTO ProjectUser (UserID, ProjectID) VALUES (1, 1);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (2, 1);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (3, 1);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (1, 2);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (2, 2);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (7, 2);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (8, 2);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (1, 3);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (3, 3);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (8, 3);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (1, 4);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (3, 4);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (4, 4);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (1, 5);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (4, 5);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (5, 5);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (6, 5);

INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Trabalho1', '#865757', 1, NULL);
INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Trabalho2', '#865786', 1, NULL);
INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Exame', '#576886', 1, NULL);

INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Comprar', '#865757', NULL, 1);
INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Estudar', '#866B57', NULL, 1);
INSERT INTO Category (Name, Color, ProjectID, UserID) VALUES ('Pagar', '#705786', NULL, 1);
