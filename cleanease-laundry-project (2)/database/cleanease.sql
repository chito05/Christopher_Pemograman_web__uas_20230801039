CREATE DATABASE IF NOT EXISTS cleanease;
USE cleanease;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    jenis_layanan VARCHAR(100),
    berat_kg FLOAT,
    tanggal DATE,
    status ENUM('Pending', 'Diproses', 'Selesai') DEFAULT 'Pending',
    FOREIGN KEY (user_id) REFERENCES users(id)
);
