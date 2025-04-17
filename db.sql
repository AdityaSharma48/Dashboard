CREATE DATABASE IF NOT EXISTS course_portal;
USE course_portal;

CREATE TABLE enrollments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  course VARCHAR(50),
  enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
