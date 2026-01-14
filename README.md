# Online Shopping Platform

A full-stack PHP web application for seamless clothing shopping. Features user authentication, shopping cart, secure checkout, admin panel, and comprehensive order management.

## 📋 Overview

The **Online Clothing Store** is a complete e-commerce solution that allows customers to browse, purchase, and manage clothing items. The platform includes separate interfaces for customers and administrators, with features for product management, order processing, and user account management.

## 🚀 Features

### Customer Features
- **Product Catalog**: Browse clothing items with detailed information (name, description, price, images, sizes)
- **Shopping Cart**: Add items, update quantities, and remove items
- **User Registration & Login**: Secure account creation and authentication
- **Checkout Process**: Complete purchases with shipping and payment information
- **Order History**: View past orders and track order status
- **Search Functionality**: Search products by name, category, or price range
- **Profile Management**: Update account details and preferences

### Admin Features
- **Product Management**: Add, update, and delete products
- **Order Management**: View and process customer orders
- **Customer Management**: Access customer information and order history
- **Inventory Control**: Manage product availability and stock levels

## 🛠️ Tech Stack

- **PHP** - Server-side scripting language
- **MySQL** - Database management system
- **HTML/CSS/JavaScript** - Frontend technologies
- **Bootstrap** - Responsive UI framework
- **jQuery** - JavaScript library for interactivity

## 📦 Installation

### Prerequisites

- **PHP** 7.4 or higher
- **MySQL** 5.7 or higher (or MariaDB)
- **Apache** web server (or Nginx)
- **phpMyAdmin** (optional, for database management)

### Setup Instructions

#### Option 1: Using XAMPP/WAMP

1. **Clone the repository**
   ```bash
   git clone https://github.com/Faizah-Binte-Naquib/Online-Shopping.git
   ```

2. **Copy to web server directory**
   - **XAMPP**: Copy `OnlineClothingStore` folder to `C:\xampp\htdocs\OnlineClothingStore`
   - **WAMP**: Copy `OnlineClothingStore` folder to `C:\wamp64\www\OnlineClothingStore`

3. **Create Database**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database (e.g., `online_clothing_store`)
   - Or import a SQL file if provided

4. **Configure Database Connection**
   - Update database credentials in `config.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'online_clothing_store');
   ```

5. **Access Application**
   - Open browser and navigate to: `http://localhost/OnlineClothingStore`

#### Option 2: Using PHP Built-in Server

1. **Navigate to project directory**
   ```bash
   cd Online-Shopping/OnlineClothingStore
   ```

2. **Start PHP server**
   ```bash
   php -S localhost:8000
   ```

3. **Access Application**
   - Open browser: `http://localhost:8000`

## 💻 Usage

### For Customers

1. **Browse Products**: Navigate through the product catalog
2. **Search**: Use the search bar to find specific items
3. **Add to Cart**: Click "Add to Cart" on desired products
4. **View Cart**: Review items in your shopping cart
5. **Checkout**: Proceed to checkout and complete purchase
6. **Track Orders**: View order history and status

### For Administrators

1. **Login**: Access admin panel with admin credentials
2. **Manage Products**: Add, edit, or remove products
3. **Process Orders**: Update order status and process shipments
4. **View Analytics**: Monitor sales and customer data

## 📁 Project Structure

```
Online-Shopping/
├── OnlineClothingStore/     # Main application folder
│   ├── config.php           # Database configuration
│   ├── home.php             # Homepage
│   ├── details.php          # Product details page
│   ├── genre.php            # Category/genre browsing
│   ├── login.php            # User login page
│   ├── register.php         # User registration page
│   ├── registerphp.php      # Registration processing
│   ├── profile.php          # User profile page
│   ├── ProfileorLogin.php   # Profile/login logic
│   ├── process.php          # General processing logic
│   ├── session.php          # Session management
│   ├── logout.php           # Logout functionality
│   ├── css/                 # Stylesheets
│   │   ├── bootstrap.min.css
│   │   ├── style.css
│   │   ├── home.css
│   │   └── details.css
│   ├── js/                  # JavaScript files
│   │   └── bootstrap.bundle.min.js
│   ├── images/              # Image assets
│   ├── php/                 # PHP includes
│   │   └── slider.php
│   ├── App_Data/            # Database files (if using LocalDB)
│   └── Web.config           # Configuration (if applicable)
├── OnlineClothingStore.sln  # Solution file (if using Visual Studio)
└── README.md
```

## 🗄️ Database Configuration

The application uses MySQL. Update `config.php` with your database settings:

```php
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'online_clothing_store');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
```

### Database Schema

The application requires a MySQL database with tables for:
- **Users**: Customer and admin accounts
- **Products**: Product catalog with details
- **Categories**: Product categorization
- **Orders**: Customer orders
- **OrderItems**: Individual items in orders
- **Cart**: Shopping cart items (session-based or persistent)

## 🔒 Security Features

- User authentication and authorization
- Role-based access control (Customer/Admin)
- Secure password hashing
- SQL injection prevention (prepared statements)
- XSS protection
- Session management

## 🎨 UI/UX Features

- Responsive design for mobile and desktop using Bootstrap
- Intuitive navigation
- Product image galleries
- Shopping cart icon with item count
- User-friendly checkout process
- Admin dashboard interface

## 🧪 Testing

To test the application:

1. **Create Test Accounts**: Register as both customer and admin
2. **Add Test Products**: Use admin panel to add sample products
3. **Test Shopping Flow**: Add items to cart and complete checkout
4. **Test Admin Functions**: Manage products and orders

## 🚀 Deployment

### Production Deployment

1. **Web Hosting**: Choose a PHP-compatible hosting service
2. **Database Setup**: Create production MySQL database
3. **File Upload**: Upload project files via FTP or hosting panel
4. **Configuration**: Update `config.php` with production database credentials
5. **Security**: 
   - Change default passwords
   - Enable HTTPS
   - Update file permissions
   - Disable error display in production
   - Use prepared statements for all database queries

## 🔧 Configuration

Update `config.php` with your database settings:

```php
<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'online_clothing_store');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
?>
```

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/Faizah-Binte-Naquib/Online-Shopping/issues).

## 👤 Author

**Faizah Binte Naquib**

- GitHub: [@Faizah-Binte-Naquib](https://github.com/Faizah-Binte-Naquib)
- LinkedIn: [fbnaquib-a07932174](https://www.linkedin.com/in/fbnaquib-a07932174/)
- Email: faizahbintenaquib@gmail.com

## 📄 License

This project is open source and available under the MIT License.

---

⭐ If you found this project helpful, please consider giving it a star!
