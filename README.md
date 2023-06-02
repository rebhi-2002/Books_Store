## Table of Contents
- [Responsive Books Store](#responsive-books-store)
  - [Dashboard Features:](#dashboard-features)
  - [User Features:](#user-features)
  - [User Search Functionality:](#user-search-functionality)
  - [Admin Search Functionality:](#admin-search-functionality)
  - [No Results Found:](#no-results-found)
  - [Database Import](#database-import)
    - [For XAMPP:](#for-xampp)
    - [For WAMP:](#for-wamp)
    - [Project Placement](#project-placement)
    - [Download XAMPP and WAMP](#download-xampp-and-wamp)
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

## User Search Functionality:

- Users have the ability to search for books using a dedicated search field.
- The search criteria include book name, price, serial number, author name, and category.
- The search results are displayed elegantly, showcasing the book's image, name, price, and a dedicated link for more details.

## Admin Search Functionality:

- Admins are provided with advanced search capabilities, leading them to a comprehensive results page.
- The results page showcases the book's image, name, publication date, and other relevant information.
- Admins have convenient options to delete or edit the book's details.
- Deletion is performed seamlessly within the same page, while editing redirects to a separate page for further modifications.

## No Results Found:

- In case no search results are found, a clear and user-friendly message is displayed: "No results found."
- This ensures both users and admins are informed when their search query yields no matches.

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

### Project Placement

When using XAMPP or WAMP, you need to place your project in the web folder of the server you are using. Here are the default paths for the web folders of each:

- XAMPP: Your project should be placed in the "htdocs" folder located in the XAMPP installation folder. For example, the approximate path to the "htdocs" folder could be "C:\xampp\htdocs". Copy your project folder into this path.

- WAMP: Your project should be placed in the "www" folder located in the WAMP installation folder. For example, the approximate path to the "www" folder could be "C:\wamp\www". Copy your project folder into this path.

Once you have placed your project in the correct folder, you can access it by opening a web browser and typing the following URL:

- XAMPP: http://localhost/project-folder-name
- WAMP: http://localhost/project-folder-name

Replace "project-folder-name" with the actual name of your project folder that you placed in the appropriate folder. Your project's home page will appear, and you can start using it.

### Download XAMPP and WAMP

You can use the following links to download XAMPP or WAMP:

- Download XAMPP: You can find different versions of XAMPP for various operating systems on the official website of Apache Friends at this link: [Download XAMPP](https://www.apachefriends.org/download.html)

- Download WAMP: You can find different versions of WAMP for various operating systems on the official website of WampServer at this link: [Download WampServer](https://www.wampserver.com/en/#download-wrapper)

# Books Store

![Books Store](https://2u.pw/G0KXeQ)

Books Store is a professional web application aimed at creating an online platform for buying and selling books. The project allows users to browse a wide range of books and easily and securely make purchases.

## Introduction

Books Store is a web application that enables users to browse a vast collection of books available for purchase. Users can create personal accounts, add books to their shopping carts, and securely complete the purchase process.

## Features

- **Extensive Book Collection**: Display a wide range of books available for purchase, categorized by genres and authors.
- **User Authentication**: Allow users to create accounts, log in, and securely manage their personal information.
- **Shopping Cart**: Enable users to add books to their shopping carts, manage the cart, and proceed to checkout.
- **Secure Payment**: Implement a secure payment gateway to handle transactions and protect users' financial information.
- **Order History**: Provide users with an overview of their past orders and the ability to track the status of ongoing deliveries.
- **Search Functionality**: Implement a search feature to allow users to easily find specific books by title, author, or genre.
- **Rating and Reviews**: Enable users to rate and review books, providing valuable feedback to other potential buyers.
- **Responsive Design**: Create a user-friendly interface that adapts to different screen sizes and devices.

## Requirements

To run the Books Store web application, you need the following:

- Web server software such as XAMPP or WAMP.
- PHP (version 7.0 or higher) installed and configured on the server.
- MySQL (version 5.7 or higher) database management system.
- An internet browser (e.g., Chrome, Firefox, Safari) to access the application.

## Installation

To install and set up the Books Store web application, follow these steps:

1. Download and install XAMPP or WAMP on your local machine.
2. Clone or download the Books Store project from the GitHub repository: [Books Store GitHub Repository](https://github.com/your-username/books-store).
3. Extract the project files into the appropriate web folder based on the server you are using (htdocs for XAMPP, www for WAMP).
4. Import the "final_project2.sql" database file into your MySQL database using phpMyAdmin or any other database management tool.
5. Configure the database connection settings in the project's configuration file.
6. Open a web browser and enter the URL for the Books Store application (e.g., http://localhost/books-store).
7. The Books Store home page should appear, indicating a successful installation.

## Usage

Once you have installed and set up the Books Store web application, you can start using it by following these steps:

1. Open a web browser and enter the URL for the Books Store application (e.g., http://localhost/books-store).
2. Browse the collection of books, search for specific titles or authors, and read book descriptions and reviews.
3. Create an account or log in if you already have one.
4. Add books to your shopping cart by clicking the "Add to Cart" button on each book's page.
5. Manage your shopping cart, update quantities, and proceed to checkout.
6. Complete the checkout process by providing the necessary information and confirming your purchase.
7. Track your order status and view your order history.
8. Rate and review books that you have purchased or read.

## Contribution

If you would like to contribute to the Books Store web application, you can follow these steps:

1. Fork the Books Store GitHub repository.
2. Make your desired changes or add new features to your forked repository.
3. Submit a pull request detailing your changes and improvements.
4. Your contributions will be reviewed, and if approved, merged into the main project.

## License

The Books Store web application is protected by copyright. © Rebhe Ibrahim.
