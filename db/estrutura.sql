CREATE DATABASE contacts_treinamento;
CREATE TABLE contacts (
    'id' INT AUTO_INCREMENT PRIMARY KEY,
    'name' VARCHAR(50) NOT NULL,
    'email' VARCHAR(100) NOT NULL,
    'message' VARCHAR(200) NOT NULL,
);
