# 🚀 Professional User Management System

A mini Full-Stack PHP project designed for managing user data with a secure authentication system. This project demonstrates CRUD operations, secure database handling, and a modern responsive UI.

## ✨ Features
* **Secure Authentication:** Admin/User login and registration with password encryption.
* **CRUD Operations:** Effortlessly add, view, update, and delete user records.
* **Modern UI:** Clean and responsive interface built with **Bootstrap 5**.
* **Secure Backend:** Uses **PHP PDO** to prevent SQL injection and ensure database security.
* **Protected Routes:** Only logged-in users can access the dashboard and user list.

## 🛠️ Tech Stack
* **Frontend:** HTML5, CSS3, Bootstrap 5
* **Backend:** PHP 8.x
* **Database:** MySQL

## 🚀 Setup Instructions

### 1. Prerequisites
Ensure you have **PHP** and **MySQL** installed on your system.

### 2. Database Setup
1. Create a database named `my_project`.
2. Run the following SQL commands to create the necessary tables:

```sql
-- Create Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create Admins Table for Auth
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);