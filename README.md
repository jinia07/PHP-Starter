# Professional User Management System

It is a mini full stack php project. Where we can add user and delete user. 

##  ফিচারসমূহ:
- **CRUD Operations**: User name, add email and delete.
- **Modern UI**: using Bootstrap 5.
- **Secure Backend**:using PHP PDO ব্যfor database connection. 
- **Database**: MySQL।

## Tech Stack:
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Backend**: PHP 8.x
- **Database**: MySQL

##  Setup Instructions:
1. install php and mysql.
২. Create a database`my_project`.
৩. Then run SQL code and make `users' table:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
