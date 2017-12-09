
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (14, 'TesteUm', '387f380808157d07c559c5e8415588dc35c5ceaff7301fdb379a8181f337f6c7', 'Teste Um', 'testeum@test.com', '');
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (15, 'julietafrade', '9c4f51fd01d7f332b85c676e4376353053fb53672514f58bdd7fb323e9520de3', 'Julieta Frade', 'julietafrade@julietafrade.pt', '');
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (16, 'TesteDois', '576d40d4abfcf16bb27d2a7898084bd47d646463d71aec216526316070f7eb0d', 'Teste Dois', 'testedois@test.com', NULL);

INSERT INTO Project (ID, Name, Description, isArchived) VALUES (1, 'Project1', 'Description Um', 'FALSE');
INSERT INTO Project (ID, Name, Description, isArchived) VALUES (2, 'Project2', 'Description Dois', 'FALSE');

INSERT INTO ProjectUser (UserID, ProjectID) VALUES (15, 1);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (15, 2);

INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (6, 'Categoria1', '#204177', NULL, 15);
INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (7, 'Categoria2', '#22222222', 1, NULL);
INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (8, 'Categoria3', '#33333333', 2, NULL);

INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (1, 'List1', 2, 'FALSE');
INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (2, 'List2', 2, 'FALSE');
INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (3, 'List3', 2, 'FALSE');
INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (4, 'List4', 1, 'FALSE');
INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (5, 'List5', 1, 'FALSE');
INSERT INTO List (ID, Name, CategoryID, isArchived) VALUES (6, 'List6', 3, 'FALSE');

INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (1, 1, 'Task1', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (2, 1, 'Task2', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (3, 2, 'Task3', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (4, 3, 'Task4', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (5, 3, 'Task5', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (6, 4, 'Task6', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (7, 5, 'Task7', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (8, 5, 'Task8', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (9, 6, 'Task9', 1, '2017-11-27');
INSERT INTO Task (ID, ListID, Name, Level, Date) VALUES (10, 6, 'Task10', 1, '2017-11-27');
