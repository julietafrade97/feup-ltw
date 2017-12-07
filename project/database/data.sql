
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (14, 'TesteUm', '387f380808157d07c559c5e8415588dc35c5ceaff7301fdb379a8181f337f6c7', 'Teste Um', 'testeum@test.com', '');
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (15, 'julietafrade', '576d40d4abfcf16bb27d2a7898084bd47d646463d71aec216526316070f7eb0d', 'Julieta Frade', 'julietafrade@julietafrade.pt', '');
INSERT INTO User (ID, Username, Password, Name, Email, Photo) VALUES (16, 'TesteDois', '576d40d4abfcf16bb27d2a7898084bd47d646463d71aec216526316070f7eb0d', 'Teste Dois', 'testedois@test.com', NULL);

INSERT INTO Project (ID, Name, Description, isArchived) VALUES (1, 'Project1', 'Description Um', 'FALSE');
INSERT INTO Project (ID, Name, Description, isArchived) VALUES (2, 'Project2', 'Description Dois', 'FALSE');

INSERT INTO ProjectUser (UserID, ProjectID) VALUES (15, 1);
INSERT INTO ProjectUser (UserID, ProjectID) VALUES (15, 2);

INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (1, 'Categoria1', '#11111111', NULL, 15);
INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (2, 'Categoria2', '#22222222', 1, 15);
INSERT INTO Category (ID, Name, Color, ProjectID, UserID) VALUES (3, 'Categoria3', '#33333333', 2, 15);

INSERT INTO List (ID, Name, isArchived) VALUES (1, 'List1', 'FALSE');
INSERT INTO List (ID, Name, isArchived) VALUES (2, 'List2', 'FALSE');
INSERT INTO List (ID, Name, isArchived) VALUES (3, 'List3', 'FALSE');
INSERT INTO List (ID, Name, isArchived) VALUES (4, 'List4', 'FALSE');
INSERT INTO List (ID, Name, isArchived) VALUES (5, 'List5', 'FALSE');
INSERT INTO List (ID, Name, isArchived) VALUES (6, 'List6', 'FALSE');

INSERT INTO ListCategory (CategoryID, ListID) VALUES (2, 1);
INSERT INTO ListCategory (CategoryID, ListID) VALUES (2, 2);
INSERT INTO ListCategory (CategoryID, ListID) VALUES (2, 3);
INSERT INTO ListCategory (CategoryID, ListID) VALUES (1, 4);
INSERT INTO ListCategory (CategoryID, ListID) VALUES (1, 5);
INSERT INTO ListCategory (CategoryID, ListID) VALUES (3, 6);

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
