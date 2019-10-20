CREATE DATABASE tasks;

CREATE TABLE Udemy {
id SERIAL NOT NULL PRIMARY KEY,
course_name VARCHAR(100) NOT NULL};
course_instructor VARCHAR(100) NOT

CREATE TABLE Projects {
id SERIAL NOT NULL PRIMARY KEY,
project_name VARCHAR(100) NOT NULL};

CREATE TABLE Certificates {
id SERIAL NOT NULL PRIMARY KEY,
certifiicate_name VARCHAR(100) NOT NULL};

CREATE TABLE Tasks {
id SERIAL NOT NULL PRIMARY KEY,
course_name INT NOT NULL REFERENCES Udemy(id),
project_name INT NOT NULL REFERENCES Projects(id),
certificate_name INT NOT NULL REFERENCES Certificates(id)};


INSERT INTO Udemy (course_name, course_instructor)
    VALUES ('The Web Developer Bootcamp', 'Colt Steele');

INSERT INTO Projects (project_name)
    VALUES ('FizzBuzz JavaScript Coding Challenge');

INSERT INTO Certificates (certificate_name)
    VALUES ('Google Analytics Individual Qualification');  


