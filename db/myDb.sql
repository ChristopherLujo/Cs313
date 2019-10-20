CREATE DATABASE tasks;

CREATE TABLE udemy (
id SERIAL NOT NULL PRIMARY KEY
, course_name VARCHAR(100) NOT NULL
, course_instructor VARCHAR(100) NOT NUll);

CREATE TABLE projects (
id SERIAL NOT NULL PRIMARY KEY,
project_name VARCHAR(100) NOT NULL);

CREATE TABLE certificates (
id SERIAL NOT NULL PRIMARY KEY,
certifiicate_name VARCHAR(100) NOT NULL);

CREATE TABLE tasks (
id SERIAL NOT NULL PRIMARY KEY,
course_name INT NOT NULL REFERENCES udemy(id),
project_name INT NOT NULL REFERENCES projects(id),
certificate_name INT NOT NULL REFERENCES certificates(id));


INSERT INTO udemy (course_name, course_instructor)
    VALUES ('The Web Developer Bootcamp', 'Colt Steele');

INSERT INTO projects (project_name)
    VALUES ('FizzBuzz JavaScript Coding Challenge');

INSERT INTO certificates (certificate_name)
    VALUES ('Google Analytics Individual Qualification');  


