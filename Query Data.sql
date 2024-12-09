CREATE DATABASE univ_db;

USE univ_db;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255),
    nim VARCHAR(255) 
);

INSERT INTO mahasiswa (nama, nim) 
VALUES 
('Ahmad Zaki', '20012345'),
('Siti Aminah', '20023456'),
('Budi Santoso', '20034567');

