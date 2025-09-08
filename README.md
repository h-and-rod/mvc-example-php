# MVC Pattern with PHP

This repository demonstrates the **Model-View-Controller (MVC) Architectural Pattern** implemented in PHP. It serves as a practical guide to building organized, maintainable web applications by separating concerns into three distinct components: Models for data handling, Views for presentation, and Controllers for business logic.

## 📁 Repository Structure

The project follows the MVC pattern with clear separation between models, views, and controllers, ensuring organized code structure and responsibilities.

```
MVC_PORTFOLIO
├── app
│   ├── controllers
│   │   └── # This is the controller layer. 
│   │       # It acts as a bridge between the Model and the View,
│   │       # receiving user requests, processing them with the support of the Model,
│   │       # and sending a response to the View layer.
│   │
│   ├── core
│   │   └── # Core contains the essential classes and utilities for the MVC framework,
│   │       # such as the base Controller, base Model, Router, and Database connection classes.
│   │
│   ├── models
│   │   └── # This is the data layer. It handles the business logic and represents
│   │       # It handles the business logic and represents
│   │       # the data manipulated by the system.
│   │
│   └── views
│       └── # This is the presentation layer.
│           # It displays data to the user;
│
├── config
│   └── # Contains configuration files for the application,
│       # such as database credentials, environment variables, and app settings.
│  
├── public
│   ├── assets
│   │   ├── css
│   │   │   └── # Stylesheets for the front-end, defining layout, colors, and typography.
│   │   ├── images
│   │   │   └── # Image files used in the application, such as logos and icons.
│   │   └── js
│   │       └── # JavaScript files for front-end interactivity and client-side logic.
│   │           
│   ├── index.php
│   │   └── # The entry point of the application.
│   │       # It initializes the app, loads necessary resources, and directs requests to the router.
│   └── upload.php
│       └── # 
│           
│  
└── README.md
```

## 🎯 Learning Objectives

* **Separation of Concerns** → Understand how to separate application logic into Models (data), Views (presentation), and Controllers (business logic)
* **More organized and modular code** → Makes project maintenance and evolution easier.
* **Testability** → The separation allows isolated unit tests for Model, View, and Controller.
* **Ease of collaboration** → Teams can work separately on the Model, View, and Controller.
* **Code reuse** → The same business logic can be used with different graphical interfaces.
* **Better scalability** → Allows adding new features without modifying the entire structure.
