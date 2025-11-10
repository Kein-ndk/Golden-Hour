# Golden-Hour
# 🕒 WatchStore

## 📖 Overview
**WatchStore** is a simple e-commerce website built with **Laravel**, designed for managing and displaying watch products.  
The project includes an **admin dashboard** for CRUD operations and a **frontend interface** for users to browse watches.  
It follows the **MVC pattern** and **RESTful routing** for clean, secure, and maintainable code.

---

## 🚀 Features
- Add, edit, delete, and view products (CRUD)
- Manage categories and product images
- Separate admin and user interfaces
- Authentication and CSRF protection
- Responsive design with Blade & Bootstrap
- Organized structure following MVC and RESTful standards

---

## 🛠️ Technologies
- **Framework:** Laravel 10  
- **Database:** MySQL  
- **Frontend:** Blade Template, Bootstrap 5  
- **Language:** PHP 8+  
- **Tools:** Composer, Artisan CLI  

---

## ⚙️ Installation
```bash
# Clone the repository
git clone https://github.com/<your-username>/watchstore.git

# Navigate to project folder
cd watchstore

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Configure your database and run migrations
php artisan key:generate
php artisan migrate --seed

# Start the local server
php artisan serve

