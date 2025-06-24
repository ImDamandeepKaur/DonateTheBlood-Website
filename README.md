# DonateTheBlood 💉

**DonateTheBlood** is a full-stack web application designed to bridge the gap between blood donors and those in urgent need. It allows for quick searches, secure registrations, and seamless communication between donors, recipients, and administrators.

---

## 🌐 Live Demo

_Deployment coming soon!_

---

## 📦 Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Bootstrap, FontAwesome
- **Backend:** PHP
- **Database:** MySQL
- **Server Environment:** XAMPP (Apache, MySQL, PHP, Perl)

---

## 🚀 Features

- 👥 User registration & login for both donors and admins
- 🔍 Search donors by blood group and city
- 💾 Create and manage donor profiles
- 🩸 Log and track blood donations
- 🛠️ Admin panel for monitoring, analytics, and data management
- ⚙️ Responsive UI with AJAX-powered search for real-time results

---

## 🛠️ Installation

To set up locally with XAMPP:

1. Clone or download this repository into your XAMPP `htdocs` directory.
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.
3. Import the database:
    - Open **phpMyAdmin**
    - Create a new database named `donatetheblood`
    - Import the `donatetheblood.sql` file included in this repository
4. Visit [http://localhost/DONATETHEBLOOD](http://localhost/DONATETHEBLOOD)  and [http://localhost/phpmyadmin/](http://phpmyadmin/)in your browser.

---

## 🗂️ Folder Structure

```
DONATETHEBLOOD/
├── bootstrap/       # Bootstrap CSS & JS libraries
├── css/             # Custom stylesheets
├── fontawesome/     # FontAwesome icon assets
├── img/             # Images and visual assets
├── include/         # Shared PHP components (config, headers, navbars)
├── jquery/          # jQuery scripts
├── user/            # User-side logic/pages
├── 404.php          # Error page
├── about.php
├── ajaxsearch.php
├── donate.php
├── donor.php
├── index.php
├── search.php
├── signin.php
└── .htaccess
```

---

## 🗄️ Database Schema

The `donatetheblood` MySQL database powers the platform with these core tables:

- **donor1:** Stores active donor details (name, contact, blood type, etc.)
- **blood:** List of blood group types (A+, O-, etc.)
- **blood_bank:** Tracks inventory and blood stock by hospital
- **donate:** Records donation activity (who donated, when, where)
- **receptionist:** Manages admin logins and verification access

---

## ✨ Screenshots

Visit (Website Images) Folder 

---

## 🤝 Contributions

Contributions are welcome!  
Feel free to fork, star, or make pull requests to improve features or design.

---

## 📄 License

You are free to use, modify, and distribute this project.
