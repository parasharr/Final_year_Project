# THE ETHNIC DIVA

THE ETHNIC DIVA is an E-commerce platform designed to showcase and sell a variety of ethnic apparel and accessories. This project is part of our final year college project, built using HTML, CSS, JavaScript, and PHP, with a backend on the XAMPP server. We've also integrated icons from FontAwesome and Boxicons for enhanced visual appeal.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [Live Demo](#live-demo)
- [Errors and Solutions](#errors-and-solutions)
- [Contributors](#contributors)

## Project Overview
THE ETHNIC DIVA aims to provide an online platform for users to browse, search, and purchase ethnic clothing and accessories. The website offers an intuitive user interface, ensuring a seamless shopping experience.

## Features
- User registration and login
- Product listing with categories
- Search functionality
- Shopping cart
- Order processing
- User profile management
- Responsive design
- Admin panel for product management

## Tech Stack
- **Front-end:** HTML, CSS, JavaScript
- **Back-end:** PHP
- **Server:** XAMPP
- **Icons:** FontAwesome, Boxicons

## Installation
1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/the-ethnic-diva.git
   cd the-ethnic-diva
2. **Set up the server:**
   - Ensure XAMPP is installed and running.
   - Place the project directory in the XAMPP htdocs folder.
   - Start Apache and MySQL from the XAMPP control panel.

3. **Import the database:**
   - Open phpMyAdmin and create a new database named ethnic_diva.
   - Import the ethnic_diva.sql file located in the project's database folder.

4. **Configure database connection:**
   - Update the database configuration in config.php file with your database credentials.

## Usage
   - Access the website: Open a web browser and navigate to http://localhost/the-ethnic-diva.
   - Admin panel: Access the admin panel by navigating to http://localhost/the-ethnic-diva/admin.

## Live Demo
    Check out Usage for Live Demo

## Errors and Solutions
  - *Connection Refused Error*
    ```bash
    Warning: mysqli_connect(): (HY000/2002): Connection refused
  Solution: Ensure that your MySQL server is running. Check your database credentials in config.php.

  - *Undefined Index Error*
    ```bash
    Notice: Undefined index: username in /path/to/file.php on line X
  Solution: This error occurs when a variable is not set. Ensure that all form inputs are properly named and the variables are correctly initialized.

  - *404 Not Found*
    ```bash
    404 Not Found
  Solution: Check the URL for typos. Ensure that the .htaccess file (if used) is correctly configured and placed in the project directory.

 - *Icon Not Displaying*
   Icons from FontAwesome/Boxicons are not displaying. Solution: Ensure that the FontAwesome/Boxicons library is properly linked in the HTML <head> section. Check for any spelling mistakes in the icon class names.

## Contributors
   - Pranjeet Goswami : Project Lead / Frontend Design
   - Falguni Mazumder : Documentation & Database Management

**We hope you find THE ETHNIC DIVA a delightful and insightful project! If you encounter any issues or have any suggestions, feel free to create an issue in the repository.**

