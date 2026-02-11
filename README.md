# Student Management System

[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Build Status](https://img.shields.io/badge/build-not%20configured-lightgrey.svg)](#)

## Overview

This repository provides a **foundational PHP MVC framework** designed for managing student data. It demonstrates the separation of concerns between models, views, and controllers and serves as a learning tool for understanding MVC architecture in PHP.

The system currently provides a structured framework and database schema but does **not include user authentication, role-based dashboards, or full CRUD functionality**. Users can extend the framework to implement these features.

## Repository Structure

```
├── app/             # Application-specific controllers, models, and views
├── core/            # Core MVC framework (base classes, router, etc.)
├── public/          # Public directory (entry point, assets)
├── config.php       # Configuration file (database credentials)
├── mvc_db.sql       # Database schema for student data
└── README.md        # Project documentation
```

## Features

- MVC architecture implemented in pure PHP  
- Clear separation of framework and application-specific code  
- Ready-to-use SQL schema (`mvc_db.sql`) for managing student records  
- Demonstrates routing, controllers, and model usage in PHP  

> Note: This framework provides the foundation for building a student management system. Additional functionality, including CRUD operations, authentication, and dashboards, must be implemented by the user.

## Prerequisites

- PHP 7.4 or higher  
- MySQL or MariaDB  
- A web server such as Apache or Nginx  
- Composer (optional, for dependency management)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/KareruRei/Student-Management-System.git
   ```
2. **Import the database**
   - Create a new database (e.g., `student_management`)  
   - Import the SQL file `mvc_db.sql`  

3. **Configure the application**
   - Open `config.php`  
   - Set database credentials (`host`, `name`, `user`, `password`) according to your environment  

4. **Serve the application**
   - Set the `public/` directory as your web root  
   - Access the application at `http://localhost/` in your browser  

## Architecture

The project follows the Model-View-Controller (MVC) pattern:

- **Core**: Base framework classes, including router and controller base  
- **App**: Application-specific controllers, models, and views  
- **Public**: Publicly accessible files such as `index.php` and assets  
- **Config**: Configuration and database settings  
- **SQL**: Schema for creating the required database tables  

## Extending the Framework

Users can extend the system by adding:

- CRUD functionality for students  
- User authentication and session management  
- Role-based dashboards (admin, teacher, student)  
- Validation utilities and form helpers  
- Integration with templating engines (e.g., Twig, Blade)  

## Contributing

Contributions are welcome. To contribute:

1. Fork the repository  
2. Create a branch: `feature/your-feature`  
3. Commit your changes  
4. Submit a pull request  

