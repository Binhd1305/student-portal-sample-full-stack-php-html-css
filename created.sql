CREATE SCHEMA `created` DEFAULT CHARACTER SET utf8 ;
USE `created` ;



CREATE TABLE `Students` (
`studentID` int,
`s_fname` varchar(25),
`s_lname` varchar(25),
`street1` varchar(25),
`street2` varchar(25),
`states` varchar(25),
`city` varchar(25),
`zip` int,
CONSTRAINT Students_PK PRIMARY KEY (studentID)
);

CREATE TABLE `Courses` (
  `courseID` int,
  `courseName` varchar(25),
  `building` varchar(25),
  `roomNo` int,
  CONSTRAINT Courses_PK PRIMARY KEY (courseID)
);

CREATE TABLE `studentcourse` (
  `studentID` int,
  `courseID` int,
  `grade` Decimal,
  `classesMiss` int,
  `classesAttend` int,
  CONSTRAINT studentcourse_Students FOREIGN KEY (studentID) REFERENCES Students(studentID),
  CONSTRAINT studentcourse_Courses FOREIGN KEY (courseID) REFERENCES Courses(courseID)
);
Insert into Students (studentID, s_fname, s_lname, street1, street2, states, city, zip)
values(1, "Henry", "Stamps", "1111 center St", "", "NE", "Papillion", 68046),
  (2, "Binh", "Do", "1234 south ave", "", "NE", "La vista", 68046),
  (3, "Jake", "Ralston", "3344 north St", "", "IA", "Ames", 55667),
  (4, "Ben", "Jones", "4455 Reeves St", "", "NE", "Kearny", 67843),
  (5, "Adam", "Sandler", "2121 Beverly Hills", "", "CA", "Los Angeles", 32114);

Insert into Courses (courseID, courseName, building, roomNo)
values(1, "INFO1335", "Edward Hall", 123),
  (2, "INFO1620", "Sarpy Center", 21),
  (3, "MA1600", "Hampton Hall", 65),
  (4, "ENG100", "South Hall", 13),
  (5, "PSY100", "Union Hall", 13);

Insert into studentcourse (studentID, courseID, grade, classesMiss, classesAttend)
values(1, 1, 94.1, 3, 23),
(2, 2, 78, 5, 25),
(3, 3, 64, 15, 25),
(4, 4, 99, 0, 23),
(5,5, 87, 1, 28);

/*
select *
from Students;
select *
from Courses;
select *
from studentcourse;
*/
GRANT SELECT, UPDATE, Insert, Delete
ON created.*
TO privateuser@localhost IDENTIFIED BY 'abcd1';
