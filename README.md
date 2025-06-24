DonateTheBlood 💉
DonateTheBlood is a full-stack web application built to bridge the gap between blood donors and those in urgent need. It enables quick searches, secure registrations, and smooth communication between donors, recipients, and blood banks. Built using HTML, CSS, JavaScript, PHP, and powered by XAMPP with MySQL, it brings accessibility and efficiency to life-saving efforts.
🌐 Live Demo
Coming soon! (You can add a deployment link here when available)

📦 Tech Stack
- Frontend: HTML, CSS, JavaScript, Bootstrap, FontAwesome
- Backend: PHP
- Database: MySQL
- Server Environment: XAMPP (Apache, MySQL, PHP, Perl)

🚀 Features
- 👥 User registration and login for donors and admins
- 🔍 Donor search by blood group and city
- 💾 Donor profile creation and management
- 🩸 Donation logging
- 🛠️ Admin panel to monitor system usage and manage data
- ⚙️ Responsive UI and AJAX-powered search

🛠️ Installation
Follow these steps to set it up locally using XAMPP:
- Clone this repository into your htdocs folder
- Start Apache and MySQL via the XAMPP Control Panel
- Import the database
- Open phpMyAdmin
- Create a database named donatetheblood
- Import the donatetheblood.sql file
- Visit http://localhost/DONATETHEBLOOD in your browser
  
🗂️ Folder Structure
DONATETHEBLOOD/
├── bootstrap/           # Bootstrap CSS & JS libraries
├── css/                 # Custom stylesheets
├── fontawesome/         # Icons
├── img/                 # Images and visual assets
├── include/             # Shared PHP components (config, headers, navbars)
├── jquery/              # jQuery scripts
├── user/                # User-side logic/pages
├── 404.php              # Error page
├── about.php
├── ajaxsearch.php
├── donate.php
├── donor.php
├── index.php
├── search.php
├── signin.php
└── .htaccess

🗄️ Database Schema
The donatetheblood MySQL database supports core platform features through the following tables:
- donor1: Stores active donor details including name, contact, and blood type
- blood: List of blood group types (A+, O-, etc.)
- blood_bank: Inventory and hospital-wise blood stock tracking
- donate: Logs of donation activity (who donated, when, where)
- receptionist: Manages administrator logins and verification access


✨ Screenshots


🤝 Contributions
Open to improvements! Feel free to fork, star, and make pull requests to enhance functionality or design.
📄 License
You are free to use, modify, and distribute.
