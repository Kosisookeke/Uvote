# **U_Vote Online-Voting-System**

This project is a PHP-based voting system designed to allow users to securely log in and vote for candidates. Follow the steps below to set up and run the application using the XAMPP Control Panel.

---

## **Prerequisites**

1. Download and install [XAMPP]
2. Ensure your XAMPP installation includes PHP and MySQL.
3. Download this project code to your computer.

---

## **Installation Steps**

### Step 1: Clone or Download the Project

1. Download the project ZIP file or clone it using:
   ```bash
   git clone https://github.com/Kosisookeke/Uvote.git
   ```
2. Extract the ZIP file if downloaded.

### Step 2: Place the Project in the XAMPP Directory

1. Move the extracted project folder to the `htdocs` directory of your XAMPP installation.
   Example path:
   ```
   C:\xampp\htdocs\Voting System
   ```

### Step 3: Start the XAMPP Control Panel

1. Open the XAMPP Control Panel and start the following services:
   - **Apache**
   - **MySQL**

### Step 4: Import the Database

1. Open your browser and go to:
   ```
   http://localhost/phpmyadmin
   ```
2. Create a new database named `voting`.
3. Import the SQL file:
   - Click on the `voting` database.
   - Select the `Import` tab.
   - Upload the `voting.sql` file from the project directory.
   - Click `Go`.

---

## **Running the Application**

1. Open your browser and navigate to:
   ```
   http://localhost/Voting%20System/index.html
   ```
2. To log in or create an account, use the following:
   - **Admin Login Page**:
     ```
     http://localhost/Voting%20System/admin_dashboard.php
     ```

---

## **Special Notes**

1. Ensure the MySQL and Apache service in XAMPP is running before importing the database.
2. If you encounter a `Not Found` error, verify that the project folder is correctly named and placed in the `htdocs` directory.
3. If you want to use spaces in URLs, replace them with `%20`.  
   Example:
   ```
   http://localhost/Voting%20System/index.html
   ```

---

## **File Structure**

```
Voting System/
├── css/
│   ├── bootstrap.min.css
│   └── styles.css
├── js/
│   ├── jquery-3.2.1.min.js
│   ├── popper.min.js
│   ├── bootstrap.min.js
├── voting.sql
├── admin_login.php
├── index.php
├── process_login.php
├── process_register.php
├── README.md
```

---

## **Contact**

For any issues or questions, feel free to contact:

- **Name**: Okeke Kosisochukwu
- **Email**: kosisochukwu@example.com

Enjoy using the U_Vote online Voting System! 🚀
