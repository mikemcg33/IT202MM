-- Create the system user
INSERT INTO Users(id, username, email, password, created, modified) VALUES (-1, 'USERNAME', 'USER@EMAIL.com', 'PASS', NOW(), NOW());

-- Create the world account
INSERT INTO Accounts(id, account_number, account_type, user_id) VALUES (-1, 000000000000, 'world', -1);
