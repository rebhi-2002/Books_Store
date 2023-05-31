## Table of Contents
- [Responsive Books Store](#responsive-books-store)
  - [Dashboard Features:](#dashboard-features)
  - [User Features:](#user-features)
  - [Database Import](#database-import)
    - [For XAMPP:](#for-xampp)
    - [For WAMP:](#for-wamp)
- [Books Store](#books-store)
  - [Introduction](#introduction)
  - [Features](#features)
  - [Requirements](#requirements)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Contribution](#contribution)
  - [License](#license)


# Responsive Books Store

The website consists of the following components:

- Dashboard
- User

## Dashboard Features:

- Add, edit, and delete categories.
- Edit and delete authors.
- Add, edit, and delete books.
- Edit and delete users.

**Note:** Any changes made to the options mentioned above will be applied directly when working with the user.

## User Features:

When a logged-in user interacts with the website, they can:

- View the website, including a shopping cart feature.
- Specify the quantity for each book and remove books from the cart.
- Utilize additional features to enhance the website according to their needs, without interfering with the administrator's work.

The website also includes two pages at the end:

- **FAQ:** Contains frequently asked questions that users may have.
- **Blog:** Coming soon.

For users who are not logged in, they are unable to purchase books or add them to the shopping cart. They also cannot view all available books and other additional features unless they log in.

## Database Import

To import your "final_project2.sql" database into XAMPP or WAMP, you can use the built-in phpMyAdmin tool in both of them. Here are the basic steps to import the database:

1. Start XAMPP or WAMP and make sure that the MySQL services are running.
2. Open a web browser and go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/). The phpMyAdmin user interface will appear.

### For XAMPP:

3. In the phpMyAdmin page, navigate to the **Import** tab in the top menu.
4. In the "Choose a file to import" section, click the "Browse" button and select the "final_project2.sql" file you want to import.
5. Choose "UTF-8" as the encoding for the file.
6. Click the "Go" button at the bottom of the page and wait for the database import to complete. A message will appear when the import is finished.

### For WAMP:

3. In the phpMyAdmin page, the database will be automatically imported when you place the database files in the `wamp64\bin\mysql\mysql{version}\data` folder. Copy the "final_project2.sql" file to this folder.
4. Restart the MySQL service in WAMP.
5. After the restart, the database should be imported automatically and ready for use.

After importing the database, you can access it by connecting to the database using the application or program you desire.

# Books Store

![Books Store](https://2u.pw/G0KXeQ)

Books Store is a professional web application aimed at creating an online platform for buying and selling books. The project allows users to browse a wide range of books and easily and securely make purchases.

## Introduction

Books Store is a web application that enables users to browse a vast collection of books available for purchase. Users can create personal accounts, add books to their shopping carts, and securely complete the purchase process.

## Features

- **Extensive Book Collection**: Display a wide range of books available for purchase, catering to various genres and interests.
- **User Registration and Authentication**: Users can create accounts, log in securely, and access personalized features.
- **Shopping Cart**: Add books to the shopping cart and proceed with a secure checkout process.
- **Advanced Search**: Search for books based on title, author, category, or keywords.
- **Detailed Book Information**: View book details, including cover image, price, description, and customer reviews.

## Requirements

Before installing and running the Books Store project, ensure that the following tools and technologies are available:

- Operating System (Windows, macOS, Linux)
- [Node.js](https://nodejs.org)
- [MongoDB](https://www.mongodb.com) database

## Installation

1. Clone the project repository to your local machine using the following command:
      ######    git clone https://github.com/rebhi-2002/Books_Store.git

2. Navigate to the project directory:
      ######     cd Books_Store

3. Install the required dependencies using npm:
      ######    npm install

## Usage

1. Start the local development server using the following command: npm start

2. Open your web browser and visit the following URL: [http://localhost:3000](http://localhost:3000)

3. You can now browse the available book collection, search for books, add them to your shopping cart, and complete the secure purchase process.

## Contribution

Contributions to the development of the Books Store project are highly appreciated. To contribute, please follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch for your features or improvements.
3. Make your changes and commit them with descriptive messages.
4. Push your changes to your forked repository.
5. Submit a pull request, explaining the changes you've made.

## License

This project is protected by copyright. © Rebhe Ibrahim.

