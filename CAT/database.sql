CREATE DATABASE school_management;

USE school_management;

CREATE TABLE Sports (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Sport_name VARCHAR(255) NOT NULL,
  description TEXT
);

CREATE TABLE Courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(255) NOT NULL,
  course_code VARCHAR(255)
);

CREATE TABLE Students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  age INT,
  RegNo VARCHAR(10),
  sport_id INT,
  course_id INT,
  FOREIGN KEY (sport_id) REFERENCES Sports(id),
  FOREIGN KEY (course_id) REFERENCES Courses(id)
);

