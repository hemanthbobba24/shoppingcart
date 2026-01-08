# ShoppingCart Web Application  
Full-Stack Shopping Cart System | PHP · HTML · CSS · JavaScript

ShoppingCart is a full-featured e-commerce shopping cart web application that allows users to browse products, add items to a cart, authenticate using registration/login forms, and view cart contents. The project demonstrates real-world web app development patterns including UI components, cart logic, and session-based user activity.

---

## 🧠 Project Overview

This project is a **shopping cart system** designed to simulate core e-commerce workflows:

- User authentication (register, login)
- Product exploration and categorization
- Shopping cart interactions
- Front-end UI pages built with HTML, CSS, and JavaScript
- Backend logic (PHP or server-side scripting)

It’s a practical example of building a modular web application with real user flows.

---

## ⚙️ Features

### ✔ User Features
- User registration and login
- Browse products by category
- Add products to cart
- View cart contents
- Update or remove items from cart

### ✔ UI Pages Included
- `HomePage` – Landing and featured products
- `ExplorePage` – Product discovery
- `AddProductsPage` – (Admin or mock page for adding products)
- `DisplayProducts` – Product listing UI
- `LoginPage` – User authentication
- `RegisterPage` – Create new user accounts
- `cart` – Cart review and update page
- `categories` – Category display components
- Shared UI components under `partials`

---

## 📁 Project Structure

```text
shoppingcart/
├── AddProductsPage/        # UI for adding products
├── DisplayProducts/        # Product listing pages
├── ExplorePage/            # Page to explore items
├── HomePage/               # Main landing page
├── LoginPage/              # User login UI
├── RegisterPage/           # New user registration UI
├── cart/                   # Shopping cart UI and logic
├── categories/             # Category related content
├── partials/               # Shared headers, footers, navbars
├── README.md               # Project documentation
└── (Backend PHP files)*    # Server logic for session, cart, users
```
If your project contains backend files (PHP), they should be placed at the root or under a server/ folder.

🧾 Getting Started (Local Setup)
Prerequisites

Web server (Apache / Nginx)

PHP 7.4+ installed

MySQL or SQLite (optional if backend persists data)

Browser for UI testing

Installation

Clone this repository:
```bash
git clone https://github.com/hemanthbobba24/shoppingcart.git
cd shoppingcart
```
Move the project into your web server directory (e.g., htdocs/ for XAMPP or www/ for WAMP).

If using a database:

Create a database (e.g., shoppingcart)

Update connection settings in your PHP config file (e.g. config.php)

Start your web server and navigate to:
```arduino
http://localhost/shoppingcart/
```
💻 How It Works
Frontend

HTML/CSS for layout

JavaScript for client-side cart interactions

UI components under partials/ for consistency

Backend (PHP)

Handles session management for logged-in users

Adds and removes products from cart

Persists cart state (session or database)

🧩 Usage Flow

Open the app in a browser

Register or log in as a user

Explore products

Add items to your cart

View and adjust cart content

Proceed to checkout (if implemented)

🚀 Future Enhancements

Suggested next steps to evolve this project:

Integrate database persistence for users & products

Add order history and checkout flow

Use AJAX for cart updates without page reloads

Implement admin dashboards for product management

Add responsive design

Integrate payment gateways

👨‍💻 Author

Hemanth Sri Ram Bobba
Software Engineer | Web Developer

GitHub: https://github.com/hemanthbobba24

LinkedIn: https://www.linkedin.com/in/hemanth-sri-ram-bobba/

⭐ Support

If this project helped you, please give it a star! ⭐
