CREATE DATABASE quiz_db;

USE quiz_db;

CREATE TABLE quiz (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    option_a VARCHAR(255) NOT NULL,
    option_b VARCHAR(255) NOT NULL,
    option_c VARCHAR(255) NOT NULL,
    option_d VARCHAR(255) NOT NULL,
    correct_answer CHAR(1) NOT NULL
);


INSERT INTO quiz (question, option_a, option_b, option_c, option_d, correct_answer)
VALUES 
('What does PHP stand for?', 
 'Personal Home Page', 
 'Private Home Page', 
 'Professional Hypertext Processor', 
 'Public Hypertext Page', 
 'A'),

('Which symbol is used to start a variable in PHP?', 
 '#', 
 '$', 
 '@', 
 '&', 
 'B');