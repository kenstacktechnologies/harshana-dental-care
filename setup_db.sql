-- ============================================================
-- Harshana Dental Care - Database Setup Script
-- Run this once in phpMyAdmin or via MySQL CLI:
--   source C:/xampp/htdocs/harshanadental/setup_db.sql
-- ============================================================

-- 1. Create the database
CREATE DATABASE IF NOT EXISTS harshana_dental
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE harshana_dental;

-- 2. Create the bookings table
CREATE TABLE IF NOT EXISTS bookings (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    first_name  VARCHAR(100) NOT NULL,
    last_name   VARCHAR(100) DEFAULT '',
    email       VARCHAR(200) DEFAULT '',
    phone       VARCHAR(30)  NOT NULL,
    age_group   VARCHAR(20)  DEFAULT '',
    treatments  VARCHAR(500) DEFAULT '',
    message     TEXT,
    pref_date   DATE,
    pref_time   VARCHAR(50)  DEFAULT '',
    source      VARCHAR(100) DEFAULT '',
    status      ENUM('new','contacted','booked','cancelled') DEFAULT 'new',
    created_at  DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. Optional: view all bookings
-- SELECT * FROM bookings ORDER BY created_at DESC;
