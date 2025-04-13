# Elearning
E-Learning Management System (LMS) using PHP MySQL


# Introduction

In today’s digital world, e-learning has transformed the education sector by making knowledge accessible anytime, anywhere. An E-Learning Management System (LMS) built using PHP and MySQL can be a powerful solution for educational institutions, corporate training programs, and individual instructors. This guide walks you through the process of creating your own LMS from the ground up.


# Step 1: Planning the Project

Before writing any code, it's essential to plan the project structure and define its key components:

# User Roles
Administrator: Manages users, courses, and overall system settings.
nstructor: Creates and manages course content and assessments.
Student: Enrolls in courses, accesses materials, and completes assessments.

# Core Functionalities
- User authentication and role-based access
- Course creation and management
- Content delivery (videos, documents, quizzes)
- Assessment tools with grading
- Communication features (forums, messages)

With these roles and features identified, you can begin designing the database schema and backend logic using PHP.

# Step 2: Key Features of the LMS

To ensure a comprehensive and functional LMS, your system should include the following features:

# ✅ User Authentication
- Secure registration and login system
- Role-based access control

# ✅ Course Management
- Create, update, and delete courses
- Assign instructors to courses
- Student enrollment management

# ✅ Content Delivery
- Upload and organize videos, documents, and other materials
- Structured lesson/module delivery

# ✅ Assessment Tools
- Quizzes, assignments, and exams
- Auto and manual grading options

# ✅ Communication Channels
- Discussion forums for course interaction
- Private messaging between users
- Announcements for important updates

# Step 3: Required Software and Tools

To develop and run the LMS, you’ll need the following software and tools:

- Web Server: Apache or Nginx (XAMPP includes Apache)
- Database: MySQL or MariaDB
- Programming Language: PHP
- Frontend Technologies: HTML, CSS, JavaScript
- Code Editor/IDE: VS Code, Sublime Text, or any preferred IDE
- Browser: For local testing (Chrome, Firefox, etc.)

# Step 4: Running the Project Locally

Follow these steps to set up and run the LMS on your local machine:

# Prerequisites
- Install **XAMPP** or any other local server environment that supports PHP and MySQL.
- Download the LMS project files (for educational use only).

# 📦 Installation Steps

1. Extract Files:
   - Unzip the downloaded project to a preferred location on your system.

2. Move to XAMPP Directory:
   - Copy the extracted project folder.
   - Paste it into the `xampp/htdocs/` directory.

3. Database Setup:
   - Open your browser and go to: `http://localhost/phpmyadmin/`
   - Click on the **Databases** tab.
   - Create a new database named: `dblms`
   - Go to the **Import** tab.
   - Browse and select the `dblms.sql` file located inside the `db` folder of the project.
   - Click **Go** to import the database.

4. Run the Project:
   - Open your browser and visit:  
     `http://localhost/Online_Learning_Management_System`

# Login Credentials

Use the following default credentials to log in as an administrator:

- **Username:** `admin@example.com`  
- **Password:** `admin`

Once logged in, you’ll have full access to explore and use the LMS on your local machine.
