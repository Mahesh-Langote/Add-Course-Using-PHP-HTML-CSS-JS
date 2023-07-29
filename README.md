<div style="background-color: black; color: white; padding: 20px; font-family: 'Courier New', monospace;">
  <h1 style="color: #00FF00;">Add-Course-Using-PHP-HTML-CSS-JS</h1>

  <h2>Project Overview</h2>

  <p>The project is a simple web application for managing college courses. It allows users to view a list of available courses, add new courses, and enroll in courses. The application is built using HTML, CSS, JavaScript, PHP, and MySQL. Courses are stored in a MySQL database, and PHP is used to handle form submissions and database operations.</p>

  <h2>User Manual</h2>

  <h3>Requirements:</h3>
  <ul>
    <li>Web server (e.g., Apache, Nginx)</li>
    <li>PHP</li>
    <li>MySQL database server</li>
  </ul>

  <h3>Installation Steps:</h3>
  <ol>
    <li>Download the project files from the GitHub repository.</li>
    <li>Create a new database in MySQL for the project. You can use phpMyAdmin or any other MySQL management tool.</li>
    <li>Import the <code>course.sql</code> file into the newly created database. This file contains the necessary table structure for the courses. Here's how to import the file using phpMyAdmin:
      <ul>
        <li>Open phpMyAdmin and select the database you created.</li>
        <li>Click on the "Import" tab in the top menu.</li>
        <li>Choose the <code>course.sql</code> file using the file selector.</li>
        <li>Click the "Go" button to import the file and create the necessary table.</li>
      </ul>
    </li>
    <li>Place the project files in the document root of your web server (e.g., <code>htdocs</code> for XAMPP or <code>www</code> for WAMP).</li>
    <li>Make sure your web server and MySQL server are running.</li>
    <li>Update the database connection parameters in the <code>save_course.php</code> file to match your MySQL server configuration.</li>
    <li>Open the <code>index.html</code> file in your web browser. You should see the list of available courses and be able to add new courses and enroll in them.</li>
  </ol>

  <h3>Usage:</h3>
  <ul>
    <li><strong>View Courses:</strong> On the main page (<code>index.html</code>), you can view a list of available courses. The courses are fetched from the database and displayed on the page.</li>
    <li><strong>Add New Course:</strong> To add a new course, click the "+ Add New Courses" button. A form will appear where you can enter the course details (name, description, duration, and image). After filling in the details, click the "Add" button to save the course to the database.</li>
    <li><strong>Enroll in Course:</strong> Each course card has an "Enroll Now" button. Clicking this button will display an alert message indicating that you have enrolled in the selected course.</li>
  </ul>

  <h3>Important Note:</h3>
  <ul>
    <li>This is a basic and simplified project for educational purposes. In a real-world scenario, you would need to implement proper security measures and validation for user inputs.</li>
    <li>For production use, consider deploying the application on a secure web server and using proper authentication and authorization mechanisms.</li>
  </ul>




<h6>Mahesh Langote</h6>
<h6>maheshlangote777@gmail.com</h6>

 <h6>Thank You ........... :)❤❤ </h6>
