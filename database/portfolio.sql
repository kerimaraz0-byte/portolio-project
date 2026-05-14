CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    technologies VARCHAR(255)
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    subject VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users(username, password)
VALUES(
'admin',
'$2y$10$8r3M2YqHDYLoz5MjlY7T7OegXH9UrBCanRFVRGfyQEhSBJWBopT5C'
);

INSERT INTO projects(title, description, technologies)
VALUES
('Portfolio Website', 'Responsive portfolio project', 'HTML CSS JS PHP MySQL'),
('Admin Dashboard', 'Admin management system', 'PHP Sessions Cookies'),
('AJAX Contact System', 'Dynamic contact system', 'Fetch API MySQL');