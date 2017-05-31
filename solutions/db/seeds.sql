-- DROP DATABASE IF EXISTS crud2;
DROP TABLE IF EXISTS tasks CASCADE;

-- CREATE DATABASE crud2;


CREATE TABLE tasks(
id SERIAL PRIMARY KEY,
name TEXT
);

--remember to lowercase

 INSERT INTO tasks(name)VALUES('Get dry cleaning from Lindas place');
 INSERT INTO tasks(name)VALUES('Pickup kids from Janices house');
 INSERT INTO tasks(name)VALUES('Teach joe to play basketball');