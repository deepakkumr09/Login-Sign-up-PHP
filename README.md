#  PHP Login & Signup System

A simple login and registration system using PHP and MySQL with session management and Bootstrap 5.

---

##  Features

- User Registration (Signup)
- User Login with Session Management
- Password Hashing using `password_hash()` and `password_verify()`
- Error and Success Alert Messages using Bootstrap
- Responsive UI using Bootstrap 5
- Logout Functionality
- Clean and simple folder structure

---

## 🛠️Tech Stack

- PHP (Core PHP)
- MySQL (Database)
- HTML, CSS, Bootstrap (Frontend)
- Apache (Localhost server via XAMPP/WAMP)

---

##  Project Structure

/Login-System
│
├── partials/
│   ├── _dbconnect.php   # Database connection
│   ├── _nav.php         # Navigation bar
│
├── login.php            # Login form
├── signup.php           # Signup form
├── logout.php           # Session destroy
├── welcome.php          # Dashboard after login
└── index.php            # Home page

## How to Run
Clone the repository.

Import the SQL file into your MySQL database (or manually create a users table).

Configure database credentials in partials/_dbconnect.php.

Run using a local server (XAMPP/WAMP).

Visit localhost/Login-System/signup.php to register and login.php to sign in.
