# Contact Form Application

database name is - testtechit;

This is a simple web application that allows users to submit a contact form. The submitted form data is stored in a MySQL database, and an email notification is sent to the site owner upon successful submission.

## Getting Started

### Prerequisites

- Web server (e.g., Apache, Nginx)
- PHP (with MySQL support)
- MySQL database

### Setting Up the Database

1. Create a new MySQL database for the application.
2. Import the `contact_form.sql` file provided in the `database` folder to create the required `contact_form` table.

### Configuring the Application

1. Open the `submit_form.php` file.
2. Update the following variables with your MySQL database connection details:

```php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "testtechit";

Usage

Open your web browser and go to the application URL.
Fill out the contact form with valid information.
Click the "Submit" button.
You will be redirected to the same page with a success message upon successful submission.
The form data will be stored in the database, and an email notification will be sent to the site owner.


