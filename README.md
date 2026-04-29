# 🚀 Professional User Management System

এটি একটি সহজ কিন্তু শক্তিশালী **Full-Stack PHP** প্রজেক্ট। এখানে ইউজারদের ডাটাবেসে যোগ করা এবং মুছে ফেলার কাজ করা যায়। 

## ✨ ফিচারসমূহ:
- **CRUD Operations**: ইউজারদের নাম ও ইমেইল যোগ এবং ডিলিট করা।
- **Modern UI**: বুটস্ট্র্যাপ (Bootstrap 5) ব্যবহার করে রেসপন্সিভ ডিজাইন।
- **Secure Backend**: PHP PDO ব্যবহার করে ডাটাবেস কানেকশন।
- **Database**: MySQL।

## 🛠 প্রযুক্তি (Tech Stack):
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Backend**: PHP 8.x
- **Database**: MySQL

## 🚀 কীভাবে চালাবেন (Setup Instructions):
১. আপনার পিসিতে PHP এবং MySQL ইনস্টল থাকতে হবে।
২. ডাটাবেসে `my_project` নামে একটি ডাটাবেস তৈরি করুন।
৩. নিচের SQL কোডটি চালিয়ে `users` টেবিলটি তৈরি করুন:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );