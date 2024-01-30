# Web Dev College Course Project: Gallery & E-Commerce Website

## Overview
Welcome to our Web Development college course project! This feature-rich website combines a gallery and an e-commerce store, providing users with a visually appealing and seamless online experience.

![Home Page](https://i.imgur.com/5qfubna.png)
### Technologies Used
- HTML
- CSS
- JavaScript
- jQuery
- SQL
- PHP (with MySQL using phpMyAdmin)
- PayPal API

## Getting Started

### Prerequisites
_To run this project locally, you'll need to have the following installed:_

1. [XAMPP](https://www.apachefriends.org/index.html) - A free and open-source cross-platform web server solution.
2. [phpMyAdmin](https://www.phpmyadmin.net/) - A web-based database administration tool for MySQL databases.

### Installation
1. Clone the repository to your local machine:
    ```bash
    git clone https://github.com/AhmedSehly/AlAhramSehly-Demo-Website.git
    ```

2. Start XAMPP and ensure that Apache and MySQL services are running.

3. Import the databases:
    - Open phpMyAdmin in your browser (usually http://localhost/phpmyadmin/).
    - Create three new databases: `user_db`, `shop_db`, and `test`.
    - Import the provided SQL files located in the project's `database` folder (`user_db.sql`, `shop_db.sql`, and `test.sql`).

4. Move the project files to the XAMPP's `htdocs` directory.

5. Open your browser and navigate to http://localhost/AlAhramSehly-Demo-Website/public/home.php to access **the main page.**

## Project Structure

- `public/`: Contains the public-facing files.
  - `home.php`: The main landing page of the website.
  - `aboutme.html`: Information about the project and the team behind it.
  - `contact.php`: Contact details and a form for user inquiries.
  - `sign_up.php`: User registration page.
  - `log_in.php`: User login page.
  - `cart.php`: Shopping cart page.
  - `admin_page.php`: Admin interface for dynamic database management.

- `database/`: SQL scripts for database creation and population.
  - `user_db.sql`: Database schema and sample data for user accounts.
  - `shop_db.sql`: Database schema and sample data for the e-commerce store.
  - `test.sql`: Database schema and sample data for testing.

- `src/`: Source files for the project.
  - `css/`: Stylesheets.
  - `js/`: JavaScript files.
  - `php/`: PHP files handling server-side logic.

- `project_images/`: Contains various folders with images used throughout the project.

## Shop Database Tables
In the `shop_db` database, you will find the following tables:

- `cart`: Stores information about the items in a user's shopping cart.
- `order`: Manages order details for completed purchases.
- `products`: Contains information about the available products in the e-commerce store.

## Pages and Functionalities
- **Main Page (**`home.php`**):** The main landing page of the website, showcasing gallery images and featured products.
- **About Me (`aboutme.html`):** Learn more about the project and the team behind it.
- **Contact (`contact.php`):** Find contact details and use the form for inquiries.
- **Sign Up (`sign_up.php`):** User registration page for creating new accounts.
- **Log In (`log_in.php`):** User login page for accessing personalized features.
- **Cart (`cart.php`):** View and manage items in the shopping cart.
- **Admin Page (`admin_page.php`):** Admin interface for dynamic database management.

## Third-Party Libraries
- **jQuery:** We have utilized the jQuery library to enhance the functionality and interactivity of our website.

## PayPal API Integration
We have integrated the PayPal API to facilitate secure and seamless online payments. Learn more about PayPal API integration in our [official PayPal documentation](https://developer.paypal.com/docs/payouts/standard/integrate-api/). Users can enjoy a reliable payment experience when making purchases on our e-commerce platform.

## Features
- **Gallery:** Explore a beautiful collection of images in our gallery.
- **E-Commerce Store:** Shop for your favorite items in our online store.
- **User Accounts:** Create an account, log in, and track your orders.
- **Payment Integration:** Secure online transactions using the PayPal API.
- **jQuery Interactivity:** Enhanced user experience through jQuery.
- **Database Integration:** Seamless integration with MySQL databases using PHP.

## Contributing
We welcome contributions! Feel free to open issues or pull requests.

Happy coding!
