# Introduction

## What is a Company Profile Website?

A company profile website is an online platform that provides information about a business, including its background, services, mission, vision, and contact details. It serves as a digital representation of the company and helps visitors learn more about the organization and its offerings.

## Why Businesses Need One

Businesses need a company profile website to establish a professional online presence and increase their visibility. A website allows potential clients and partners to access important information, explore available services, and communicate with the company more easily. It also helps build credibility and strengthen customer trust.

## Purpose of the Project

The purpose of this project is to learn the fundamentals of Laravel Blade templates and routing. It aims to provide practical experience in creating reusable layouts, organizing views, implementing controllers, and defining routes within a Laravel application. Through this project, students can better understand how Laravel supports the development of dynamic and well-structured web applications.

# Objectives learned

```
• Create multiple application routes.
• Build reusable Blade layouts.
• Connect routes to controllers.
• Understand separation of concerns using MVC.
• Publish a professional GitHub repository.
```

# MVC Architecture

## What is MVC?

MVC is a design pattern that separates an application into three interconnected components. The **Model** is responsible for managing data and business logic, the **View** handles the user interface and presentation, and the **Controller** acts as an intermediary that processes user requests and connects the Model and the View.

## Why Laravel Uses MVC

Laravel uses the MVC architecture to create a clear structure for web applications. By separating data, application logic, and the user interface into different components. Making it a more development experience friendly

## Advantages of MVC in Software Development

One of the main advantages of MVC is the separation of concerns, which allows developers to work on different parts of an application independently. MVC also improves code reusability, making it easier to modify and update individual components without affecting the entire system.

# Laravel Routing

## What is Routing?

Routing is the process of connecting a URL to a specific page, controller, or function in a web application. In Laravel, routes determine how the application responds to a user's request.

## Named Routes

Named routes assign a unique name to a route. They make it easier to create links and maintain URLs within an application.

## GET Requests

A GET request is an HTTP method used to retrieve and display information from a server. In this project, GET requests are used to display the Home, About, Services, and Contact pages.

## Route Definitions

Route definitions specify the URL and the action Laravel should perform when that URL is accessed.

# Controllers

## Purpose of Controllers

Controllers are responsible for handling user requests and determining how the application should respond. They act as a bridge between the Model and the View in the MVC architecture.

## Benefits of Controllers

Controllers help organize application logic, improve code readability, and make applications easier to maintain. They also promote code reusability by separating business logic from the user interface.

## Controller Methods

Controller methods are functions within a controller that perform specific tasks. In this project, the `CompanyController` contains methods that return the Home, About, Services, and Contact pages.

# Blade Templating Engine

## Blade Layouts

Blade layouts provide a reusable template that can be shared across multiple pages. They help maintain a consistent design throughout the application.

## Blade Components

Blade components are reusable UI elements that can be included in different views. In this project, the navigation bar and footer are implemented as components.

## `@extends`

The `@extends` directive allows a view to inherit a layout.

## `@section`

The `@section` directive defines a block of content that will be inserted into a layout.

## `@yield`

The `@yield` directive displays content from a section defined in another Blade file.

## `@include`

The `@include` directive inserts another Blade file into the current view.

# Laravel Folder Structure

## `app/`

The `app` folder contains the core application code, including controllers, models, and other classes responsible for the application's logic.

## `routes/`

The `routes` folder contains all route definitions. It determines how the application responds to different URL requests.

## `resources/`

The `resources` folder stores application assets such as Blade templates, CSS files, JavaScript files, and other front-end resources.

## `public/`

The `public` folder contains publicly accessible files such as images, CSS files, JavaScript files, and the application's entry point (`index.php`).

## `bootstrap/`

The `bootstrap` folder is responsible for initializing the Laravel application and loading the necessary framework components.

## `config/`

The `config` folder contains configuration files that define the application's settings, such as database connections, mail services, and other environment-specific options.

# Reflection on MVC Architecture in Laravel

```
One of the most important concepts I learned while working on this project was the MVC (Model-View-Controller) architecture. Before using Laravel, I viewed a website as a collection of pages that displayed information. After creating routes, controllers, and Blade templates, I gained a better understanding of how a web application is organized behind the scenes. I learned that the Model manages data and business logic, the View handles the user interface, and the Controller processes requests and connects the different parts of the application. This separation allows developers to organize code more effectively and create applications that are easier to understand.

I also learned why the separation of concerns is an important principle in software development. Separation of concerns means that each component of an application should have a specific responsibility. Instead of placing all the code in a single file, different tasks are divided among multiple components. This approach improves readability and simplifies maintenance. For example, if I need to modify the design of a page, I can edit the Blade template without changing the controller. Likewise, if I need to modify the application's logic, I can update the controller without affecting the user interface. This structure reduces complexity and helps prevent errors during development.

Another important lesson from this project was understanding how routes, controllers, and views work together. When a user visits a specific URL, Laravel first checks the route definitions in the `routes` folder. The route then directs the request to a controller method. The controller processes the request and returns the appropriate view. Finally, the Blade template displays the information to the user. Through this process, I was able to see how each component plays a different role while still working together to produce a complete web page. Implementing multiple pages, such as Home, About, Services, and Contact, helped me understand how Laravel manages requests and organizes application files.

I also realized that the MVC architecture is especially useful for larger enterprise systems. Large applications often involve multiple developers working on different parts of a project at the same time. By separating responsibilities, front-end developers can focus on user interfaces while back-end developers work on application logic and data management. This structure improves collaboration, makes testing easier, and allows applications to grow without becoming difficult to maintain. Overall, this project provided valuable experience with Laravel and demonstrated how MVC can be used to develop scalable and well-organized software systems.
```
