# Rental-car Application by Manoranjan Kumar

## Introduction

Welcome to the README file for the Rental-car Web Application by Manoranjan Kumar. This document provides an overview of the code and its functionality.

## Screenshots

<img width="949" alt="Screenshot 2023-10-06 000025" src="https://github.com/Manoranjan111/car-rental/assets/95931051/6923e0b5-835b-4172-9613-bc9ae76c0433">

<img width="946" alt="Screenshot 2023-10-06 000056" src="https://github.com/Manoranjan111/car-rental/assets/95931051/58b57ffd-e948-4545-b6bc-25ee4c275594">


<img width="952" alt="Screenshot 2023-10-06 000129" src="https://github.com/Manoranjan111/car-rental/assets/95931051/07e02520-2955-40ae-80ea-f8c2ddad4b37">

<img width="950" alt="Screenshot 2023-10-06 000211" src="https://github.com/Manoranjan111/car-rental/assets/95931051/59984d10-883e-4f95-bbda-d5c7836ac6b2">


<img width="946" alt="Screenshot 2023-10-06 000244" src="https://github.com/Manoranjan111/car-rental/assets/95931051/e47d9229-a4eb-4b6f-b4c3-836d4dcab67a">

<img width="947" alt="Screenshot 2023-10-06 000410" src="https://github.com/Manoranjan111/car-rental/assets/95931051/5e97d1af-c24e-4e35-afad-0e82c6a90203">


## HTML Structure:

Your code consists of multiple HTML files, each representing different pages of a website.
The pages include a login modal, a search page, a booking page, and a main index page.


## PHP Usage:
User Registration and Login: Users and agents can register and log in to the application.
User and Agent Roles: Differentiate between user and agent roles for customized functionality.
Database Operations: Perform database operations, including adding, editing, and retrieving car details.
Dynamic Content Rendering: Display car information dynamically based on the data stored in the database.
Session Management: Manage user and agent sessions for authentication and role-based access control.
Usage
Visit the web application URL to explore available cars.
Use the navigation tabs to filter cars by criteria such as vehicle model.
If logged in as an agent, access the "Add Car" button to add new cars to the platform.
Click on a car listing to view more details.
If logged in as a user, book a car by selecting the "Book It" button on the car listing.

1. index.php: The main landing page for the application.
2. _signupModal.php and _handleSignup.php: User and agent registration pages.
3. _loginModal.php and _handleLogin.php: User and agent login pages.
4. _logoutModal.php: Logout functionality for both users and agents.
5. _totalBookedCar.php: Display of all booked cars for agents.
6. _addCarModal.php and _handleAddCar.php: Car addition pages for agents.
7. _carcontainer.php: Displays a list of all available cars.
8. _footer.php: The footer section, including social media links and copyright information.
9. _searchResults.php: Allows users to search for cars by vehicle model.
10. _editCarDetails.php and _handleEditCar.php: Car detail editing for agents.
11. _bookCar.php and _handleBookCar.php: Car booking pages for users.
12. _dbconnect.php: Establishes a database connection.
13. _header.php: Contains the website's navigation bar and alerts.
14. _carousel.php: Displays a carousel with images retrieved from the Unsplash API.

## Usage

- Visit the web application URL to view the all Cars.
- Use the navigation tabs to filter topics by different criteria.
- If logged in, you can click the "Add Car" button to create a new forum topic.
- Click on a topic to view its details.


## Database Creation

<!-- create a new database called "rental_car"
and go to file car-rental/Databases and import all 4 files in databae rental_car.
     1. agent
     2. users
     3. booked_car_details
     4. added_vehicle -->
1. Create the Database:
    rental_car

2. Import SQL Files:
    
You can use PHPMyAdmin or command-line tools like mysql to import SQL files into the "rental_car" database. Below is an example of how to import SQL files using PHPMyAdmin:

Open PHPMyAdmin in your web browser.
Select the "rental_car" database.
Go to the "Import" tab.
Click on the "Choose File" button for each SQL file (agent.sql, users.sql, booked_car_details.sql, and added_vehicle.sql) and select the corresponding file car-rental/Databases.
Click the "Go" or "Import" button to import each file into the database.




## Customization

You can customize the appearance and behavior of the forum by modifying the CSS styles and adding new features to the PHP code. Feel free to tailor this code to your specific requirements.

## Contact Me

If you have any questions or need assistance with this forum web application, please feel free to reach out to me via email at [manoranjankumar8051@gmail.com](mailto:manoranjankumar8051@gmail.com).

Thank you for exploring the Forum Web Application by Manoranjan Kumar!

