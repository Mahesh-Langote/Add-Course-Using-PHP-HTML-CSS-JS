# Add-Course-Using-PHP-HTML-CSS-JS


Project Overview:
The project is a simple web application for managing college courses. It allows users to view a list of available courses, add new courses, and enroll in courses. The application is built using HTML, CSS, JavaScript, PHP, and MySQL. Courses are stored in a MySQL database, and PHP is used to handle form submissions and database operations.

User Manual:

Requirements:

Web server (e.g., Apache, Nginx)
PHP
MySQL database server
Installation Steps:

Download the project files from the GitHub repository.
Create a new database in MySQL for the project. You can use phpMyAdmin or any other MySQL management tool.
Import the course.sql file into the newly created database. This file contains the necessary table structure for the courses.
Place the project files in the document root of your web server (e.g., htdocs for XAMPP or www for WAMP).
Make sure your web server and MySQL server are running.
Update the database connection parameters in the save_course.php file to match your MySQL server configuration.
php 


// Database connection parameters
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "your_database_name";



Open the index.html file in your web browser. You should see the list of available courses and be able to add new courses and enroll in them.
Usage:

View Courses: On the main page (index.html), you can view a list of available courses. The courses are fetched from the database and displayed on the page.

Add New Course: To add a new course, click the "+ Add New Courses" button. A form will appear where you can enter the course details (name, description, duration, and image). After filling in the details, click the "Add" button to save the course to the database.

Enroll in Course: Each course card has an "Enroll Now" button. Clicking this button will display an alert message indicating that you have enrolled in the selected course.

Important Note:

This is a basic and simplified project for educational purposes. In a real-world scenario, you would need to implement proper security measures and validation for user inputs.
For production use, consider deploying the application on a secure web server and using proper authentication and authorization mechanisms.
