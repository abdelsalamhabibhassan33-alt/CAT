/*Mohammad Abdulmageed Mohammad Ahmad 
25/30052*/

CREATE DATABASE musanze_service_desk;
USE musanze_service_desk;

CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100),
    service VARCHAR(50),
    quantity INT,
    price DECIMAL(10,2),
    total DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);