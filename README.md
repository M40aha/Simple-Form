# Simple-Form (Name & Age Form Web App)


✨ Overview



This project is a simple yet effective web application that allows users to input their name and age through a clean, styled form.
Upon submission, the data is saved into a MySQL database, and the user is shown a confirmation message that includes their ID, Name, and Age.

This project is perfect for beginners who want to learn how to:

Connect PHP with MySQL

Handle HTML form submissions securely

Display database-generated results back to the user

Style forms with modern CSS

🚀 Features




✅ Modern, responsive, and user-friendly design
✅ Centered form with gradient background and clear typography
✅ Server-side validation to ensure no empty data is submitted
✅ Uses MySQL to persist user data
✅ Displays a success message showing:

Record ID
Name
Age
✅ Clean and modular file structure for easy understanding and maintenance



📁 Project Structure




├── index.html         # The main page with the HTML form
├── MMH.php            # PHP script that processes form data and inserts it into the database
├── index1.php         # (optional) alternative or backup script




🖥️ Technologies Used



HTML5 — for the form and structure

CSS3 — for styling the form and page

PHP — for handling form submission and interacting with the database

MySQL — for data storage



📋 Setup Instructions



1️⃣ Install a web server stack (like XAMPP, MAMP, or WAMP) with PHP & MySQL.
2️⃣ Create a database (e.g., called maha) and a table with columns:
ID (AUTO_INCREMENT), NAME, AGE.
3️⃣ Place the files in your web server root directory (htdocs in XAMPP).
4️⃣ Start Apache and MySQL from your control panel.
5️⃣ Open your browser and go to http://localhost/index.html.
6️⃣ Fill out the form and submit — your data will be saved, and a confirmation with your ID, Name, and Age will be displayed.


<img width="1836" height="835" alt="Screenshot 2025-07-22 150155" src="https://github.com/user-attachments/assets/34df1848-d37f-41f2-8aa4-04cc4da858e6" />
<img width="1856" height="836" alt="Screenshot 2025-07-22 150227" src="https://github.com/user-attachments/assets/16748d5b-7882-4762-bb06-b54fb1261415" />


🌟 Motivation




This project was created as a small and practical example to help beginners understand the full cycle of:

Designing a form

Validating data

Inserting records into a database

Displaying results

It can also be extended to include features like:

User authentication

Viewing all records

Updating and deleting records
