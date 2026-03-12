# 🏟️ Polideportivo Santo Domingo

This project is based on developing a web application that enables more organized management in a community sports complex (polideportivo), where people can participate in a wide variety of physical activities and exercise options. Through this platform, users can easily access information and complete online registrations for swimming classes, competitions, soccer and basketball training sessions, and many other activities. The main objective is to provide the best possible user experience, encourage healthy lifestyles within the community, and keep users informed in an efficient and accessible way.

## ✨ Features

- 🏠 **Home Section:** Displays an attractive and informative interface when entering the platform, including news and reports about the sports center.
- 📰 **News Section:** Provides a dedicated section where users can stay informed about updates and announcements related to the sports center.
- 📩 **Contact Section:** Includes a contact form that allows users to send messages to the sports center for future response.
- 🗓️ **Available Schedules Section:** Shows the available sports disciplines, their respective schedules, and the contact information (email and phone number) of the person in charge.
- 📅 **Events Section:** Presents a calendar or record of current and upcoming events organized by the sports center.
- 🛠️ **CRUD Management Section:**
    - Allows admin users to Create, Read, Update, and Delete records related to staff members and sports disciplines.
    - Regular users are able to view this information in table format.
- ❓ **Frequently Asked Questions (FAQ) Section:** Provides a section with frequently asked questions to help resolve common doubts quickly.
- 👤 **User Management:**
    - User registration.
    - Login system.
    - User profile administration.
- 🏆 **Class Reservations:** Implements a system for booking and managing sports classes and activities.
- 📱 **Responsive Design:** Ensures compatibility and optimal visualization across different screen sizes and devices.

## 🖥️ Technologies Used

- 🎨 **Frontend**: CSS, HTML, Javascript
- 💻 **Backend**: PHP
- 🧱 **Framework**: Bootstrap
- 📚 **Libraries**: JQuery, PHPMailer
- 🗄️ **Database**: MySQL
- 🌐 **Server**: Apache
- 🧩 **Version Control**: Git

## ⚙️ Installation

### 🧰 Prerequisites

To run this project locally, you'll need to have the following installed:

- 🌍 A web browser (e.g., Firefox, Google Chrome, Microsoft Edge)
- 🛢️ [MySQL](https://www.mysql.com/products/workbench/) (database manager)
- 💻 [VSCode](https://code.visualstudio.com/) (open source code editor)
- 🚀 [XAMPP](https://www.apachefriends.org/es/index.html) (includes PHP, MySQL, and Apache)

### 🔧 Setup

1. 📥 Clone the repository:

    ```bash
    git clone https://github.com/Crisrod0912/PolideportivoSantoDomingo.git
    ```

2. 🗃️ Set up the MySQL database:

   - Open XAMPP and start **Apache** and **MySQL**.
   - Go to **phpMyAdmin** by visiting `http://localhost/phpmyadmin` in your browser.
   - Create a new database called `polideportivo`.
   - Import the provided SQL file `polideportivo.sql` into the `polideportivo` database using phpMyAdmin.

3. ⚙️ Configure the project:

   - Update the database connection settings in the `conexion.php` file:

   ```php
    <?php
    define("DB_HOST", "127.0.0.1");
    define("DB_USER", "root");
    define("DB_PASSWORD", "your_password_here");
    define("DB_DATABASE", "polideportivo");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    ?>
   ```
   
   Ensure the MySQL credentials and database name match your local setup.

4. ▶️ Start the XAMPP server:

   - Open the **XAMPP Control Panel** and click on "Start" for both Apache and MySQL.

5. 🌐 Access the platform by navigating to `http://localhost/PolideportivoSantoDomingo/Polideportivo_Santo_Domingo/` in your browser.

> [!NOTE]
> **Project Owner / Developer** 🧑🏻‍💻  
>- Cristopher Rodríguez Fernández 
***
