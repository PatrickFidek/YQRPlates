# YQRPlates
CS476 Software Development Project

![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/YQRPlates.png)
---

## Group Members
- Patrick Fidek (patrickfidek) *paf792@uregina.ca*
- Brett Harley (brettharley) *bch117@uregina.ca*
- Somtochukwu Igbokwe (somtoigbokwe) *sci396@uregina.ca*
- Quinn Schwabe (quinnschwabe) *schwabeq@uregina.ca*
- Dharma Tejash Surapaneni (dharmatejash) *dsq274@uregina.ca*
---

### Problem Defintion 
> 1.0: Problem Description
>   - Develop a web-based software application that provides dining suggestions within the city of Regina for indecisive customers. The software application allows customers to input preferences and based on the customer’s input, the  application outputs restaurant suggestions. Restaurant owners can also utilize the application to promote their business  and provide customers with information.
>
> 1.1: Problem Definition
> - The functional requirements of customers include creating an account; providing their preferences such as type of food, price range, and location; viewing restaurants and menus; generating customized restaurant suggestions; viewing promotions; and viewing a custom dashboard of restaurants based on preference categories. The functional requirements of restaurant owners include creating an account; advertising their restaurant; providing restaurant details such as food types, hours, and location; uploading menus; and viewing a custom dashboard with customer insights. The quality requirements for both user roles include user-friendliness, correctness, time-efficiency, and robustness.
> 
> 1.2: Application Domain
> - The YQR Plates application belongs to the matchmaking system domain which matches consumers of information with producers of information. YQR Plates enables customers (consumers) and restaurant owners (producers) to effectively share their preferences and capabilities (information), respectively. The YQR Plates application processes the customers’ and restaurant owners’ shared information to identify matching information and outputs restaurant suggestions accordingly.
>   
> 1.3: Project Motivation:
> - When looking for a specific type of restaurant or food, it can be difficult to find good suggestions that accurately align with user preferences. The hope for this application is that the individually curated results based on the user’s input will leave the user satisfied and wanting to use the application again for their next meal. YQR Plates aims to fill the industry gap of being able to receive dining suggestions without any decision-making required from the user - almost as easy as rolling a dice.
### 2.0: Application Benefits
> - To differentiate YQR plates from other competitor applications in the restaurant selector/matchmaking category, Google Reviews (google.com) and DoorDash (https://www.doordash.com/) were analyzed and compared to YQR Plates. Google Reviews is an application that enables customers to search for reviews or leave reviews of a customer’s experience at a restaurant to facilitate dining decisions. DoorDash is an online system that enables customers to order food from a restaurant and have it delivered. Table 1 and Table 2 illustrate the results of the comparison between YQR Plates and these two related systems.
### 3.0: Requirements Elicitation
> - The two types of user roles of YQR Plates include the customer and restaurant owner. The role of the customer is to interact with the YQR Plates software application to access information regarding dining possibilities within the city of Regina to facilitate dining decisions. The role of the restaurant owner is to interact with the YQR Plates software application to input dining information regarding their establishment for customer consideration. 
> - 3.1.1: Functionality for Customer
>   - Create Account: Customer enters personal credentials along with a username and password to obtain a unique identity on YQR Plates that is used for future login purposes enabling access and interaction with YQR Plates as a recognized user.
>   - Log In: Customer enters the username and password selected during the creation of an account to access YQR Plates information.
>   - Enter Preferences: Customer enters their preferences for Regina area, restaurant type, price range, and food type.
>   - Update Preferences: Customer updates their preferences for Regina area, restaurant type, price range, and food type.
>   - View Restaurants: Customer views the restaurant suggestions generated by the application.
>   - Use Suggestion Generator: Customer can choose to use a suggestion generator to have YQR Plates select a restaurant, thereby eliminating all decision-making for the customer.
>   - View Promotions: When viewing a restaurant’s page, the customer can view the promotions the restaurant is currently offering.    
>   - View Custom Dashboard: When a customer goes to the profile page, the option to view a custom dashboard that displays all the restaurants matching the customers’ preferences is available.
>   - View Menu: When a customer is viewing a restaurant’s page, a customer can interact with the interface to view the restaurant’s menu.
>   - Log Out: After interacting with YQR Plates, the customer discontinues the session by selecting logout. 
> - 3.1.2: Functionality for Restaurant Owner
>   - Create Account: Restaurant owner enters personal credentials along with a username and password to obtain a unique identity on YQR Plates that is used for future log in purposes enabling access and interaction with YQR Plates as a recognized user.
>   - Log In: Restaurant owner enters the username and password selected during the creation of an account to access YQR Plates to provide customers with information. 
>   - Add Restaurant: Restaurant owner inputs the restaurant name into YQR Plates.
>   - Provide Details: Restaurant owner enters the details of the restaurant such as what type of food can be purchased, what type of restaurant it is, price range, and location of the restaurant within Regina.
>   - Post Advertisements or Promotions: Restaurant owner posts advertisements promoting their restaurant.
>   - Upload Menu: Restaurant owner easily uploads the menu associated with their establishment.
>   - View Custom Dashboard: Restaurant owner views dashboard with statistics demonstrating how customer preferences match with the restaurant.
>   - Update Restaurant Details: Restaurant owner inputs information necessitated by any changes, ie. menu changes.
>   - Log Out: After interacting with YQR Plates, the restaurant owner discontinues the session by selecting logout. 
>
> 3.2: Software Qualities
>
> 3.2.1: Correctness
>
> 3.2.1.1: Customer
> - When using the suggestion generator, YQR Plates will suggest the correct restaurants based on the customer’s preferences. If the customer has not logged in and provided preferences, the software application will suggest any available restaurant at random. If the customer has logged in and provided preferences, YQR Plates will filter the list of available restaurants by comparing the user’s preferences against restaurants’ details. The suggestion generator will suggest a restaurant from the filtered list after the comparison is complete, ensuring the customer will get an appropriate suggestion that considers their preferences. 
> - Customers can view a custom dashboard that provides an accurate breakdown of how many available restaurants match customer’s preferences. The dashboard will display a statistic for each preference category. The number displayed in these categories will be determined by comparing and matching the customer’s preference selection from each category to the details of available restaurants.
>
> 3.2.1.2: Restaurant Owner
>  - Restaurant owners have access to a custom dashboard that provides accurate customer statistics relating to their restaurant details. The dashboard allows owners to see how many customers’ preferences align with their restaurant details. The preference categories that customers can use to filter their suggestions correspond to the categories of information restaurant owners provide about their restaurants. The numbers displayed on the dashboard are produced by comparing how many customers’ preferences match the restaurant owner’s details for each category. 
> - When restaurant owners go to update their restaurant details, the software application will show the current information provided about the restaurant. The listed information will update accordingly if the owner changes any of the values from what is currently saved. Correctly displaying the information allows restaurant owners to see what is currently being shown to customers and updating the list to reflect any changes made lets owners know their changes have been saved and applied.
> 
> 3.2.2: Time Efficiency
>
> 3.2.2.1: Customer
> - When using the suggestion generator, YQR Plates will provide restaurant suggestions to customers in a timely fashion after preferences are submitted. If no preferences are selected, the software application will promptly suggest a random suggestion from the list of restaurants. When preferences are selected, they will be efficiently compared with restaurant details and a random restaurant will be suggested from the list of matching restaurants. If customers are unhappy with the suggestion, they can continually use the generator in a rapid manner to receive multiple suggestions in a matter of seconds.
> - Customers can view a list of all the available restaurants on YQR Plates. If customers utilize the available filters such as food type or location, the list will be filtered and updated in a timely manner. Customers can select restaurants from the list to view more detailed information about the restaurants. After selection, the restaurant's details including the menu and available promotions will be displayed without delay.
> 
> 3.2.2.2: Restaurant Owner
> - If a restaurant owner needs to update the details of their restaurant, they can go to their profile to view and edit their current information. When selecting edit, a form will be made available to the owner, allowing them to edit as many details as needed at one time. Following submission the updated details will immediately be reflected under the restaurant owner’s profile. The changes will also be promptly reflected in the restaurant listings for customers to view.
> - When restaurant owners navigate to their custom dashboard, the categorical statistics for their restaurant will be available upon the initial page rendering. The statistics will update in real-time if customers modify their preferences, resulting in a change to the restaurant owner’s data. The continuous availability of categorical statistics allows restaurant owners to maintain visibility into how their restaurant is meeting customers’ wants or needs.
> 
> 3.2.3: Robustness
>
> 3.2.3.1: Customer
> - If a customer enters invalid credentials when signing in to the YQR Plates application, the software application will provide a descriptive error message. The error message informs the customer that the credentials entered are invalid which prompts the customer to try signing in again. In addition to providing an error message to the customer, the software application will maintain the customer's input to prevent the customer from having to re-enter their email.
> - If a customer tries to view the dashboard or use the suggestion generator with preferences before signing in, the software application will not freeze or display a blank page. Instead, the customers will be prompted to log in or create an account. 
> 3.2.3.2: Restaurant Owner
> - When uploading a file, the website will provide a descriptive error message if a restaurant owner uploads a file that is too big or incompatible with the site. The website will not crash and will display an error message indicating the exact issue to the user. The message will also provide the correct file type and size, allowing them to correct their error on the next attempt. 
> - As restaurant owners create an account and provide their restaurant’s details, the form will perform data validation on all user input. Logical checks will be used to enforce certain data restrictions such as appropriate email formatting and dollar values in the price range fields. Similar validation will also be performed on the form for adding promotions to ensure start and end dates are valid. An error message will be displayed if any data entered is incorrect, allowing the user to fix any mistakes.
### 4.0: Functional Requirements Specification
> 
> 4.1: Use Use Case Diagrams
> 
> 4.1.1: Customer
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/CustomerUseCase.png)
>
> 4.1.2: Restuarant Owner
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/RestaurantOwnerUseCase.png)
>
> 4.2.2: 
>
> 4.2.1: View Menus of Perfect Match Restaurants
> ![image]()
> 
> 4.2.2: Update Restaurant’s Menu
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/UpdateMenuActivityDiagram.jpg)
### 5.0: Software Design
> 5.1: MVC Architecture
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/MVCDiagram.png)
> - Laravel, the Web framework selected for the YQR Plates software application, incorporates the Model View Controller (MVC) architecture style which supported the development of YQR Plates following the MVC structure and provided two main benefits. 
The first benefit of the MVC architecture style for YQR Plates is that it separates the concerns or responsibilities of the three components. For example, the responsibility of the Models is to manage the access to and updates of YQR Plates’ data which provides important information for the application related to the various restaurants. The responsibility of the Views is to display the data of interest to customers and restaurant owners via clean graphical interfaces according to updates prompted by user interaction. For example, after a customer inputs personal restaurant preferences regarding food type, price point, restaurant type, and location within Regina, the View displays a clean dashboard showing how many restaurants match the input criteria. Lastly, the responsibility of Controllers is to handle system behavior, such as interaction with YQR Plates customers or restaurant owners, and decision-making to quickly process requests. For example, the Upload Restaurant Controller receives input regarding an owner’s restaurant and updates the Model with the restaurant owner’s information. The Controller may also receive a request from a customer for restaurant suggestions and after querying the Model, it will update the View accordingly. This separation of concerns or strong cohesion benefits YQR Plates because it allows the three components to be developed and maintained separately. Also, since the user interface code is decoupled from the rest of the code, maintainability is increased as Views can be easily added, removed, or updated without impacting the rest of the code. 
The second benefit of the MVC architecture style to YQR Plates is that it ensures consistency is maintained between the Views and the Model. Whenever the Model is updated with new or changing restaurant data, the Views will reflect these changes accordingly. For example, if a restaurant owner adds, deletes, or updates a promotion and/or their restaurant information, all Views will be consistent with each other when displaying data relating to any change. This guarantee of consistency ensures the correctness of YQR Plates since the Views will accurately display the current state of the Model. 
> 
> 5.2 Observer and Simple Factory Design Patterns
>
> 5.2.1 Simple Factory Design Pattern
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/FactoryPattern.drawio.png)
>
> 5.2.2 Observer Design Pattern
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/PreferenceObserver.png)
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/RestaurantObserver.png)
> 
> 5.3 Whole Software Class Diagram
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/ClassDiagram.png)
### 6.0 Software Implementation
> 6.1 Top-level Structure of the Code Within the Web Framework
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/MVCCode.png)
>
> 6.2 Deployment Diagram
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/DeploymentDiagram.jpg)
### 7.0 Technical Documentation
> 7.1 Programming Languages
> - CSS: Added consistent and engaging style to our web pages. Laravel leverages stylesheets stored in its public folder, which then links to our blade (web page) files.
> - HTML: Used to structure all of our web pages. HTML is incorporated into Laravel’s front-end development environment.
JavaScript: Used to handle form validation as well as utilizing AJAX requests to load data dynamically e.g. incorrect form entry does not disrupt the user experience.
> - PHP: The central language that Laravel is built upon. PHP gives function to Laravel’s controller methods, routes, and models. PHP handles our many form submissions as well as user authentication. 
> - SQL: Used to make queries regarding users, owners, restaurants, and preferences via its interaction with the database.
> 
> 7.2 Software Tools and Environments
> - A2 Hosting: The web hosting provider we subscribed to features a portal that granted us administrative access to cPanel and PhpMyAdmin.
> - Apache: Hosts YQR Plates and handles web server requests with stability and reliability.
> - cPanel: Provided us with an efficient and understandable interface to manage domain and ssh settings, database users and permissions, and server management. 
> - Draw.io: Used to design and document our MVC architecture case diagram, use case diagrams and hardware deployment diagram.
FileZilla: A fast and reliable tool used to upload files to the server. It became another tool used to reliably manage server files remotely.
> - Git: Allowed collaboration with our team members via code merge branches and kept a history of changes we could reference as YQR Plates grew.
GitHub: Provided a space that allowed us to collaborate, share code, and manage our growing repository. Commits and code changes were reviewed by our group here.
> - Laravel: A powerful MVC framework that allowed us to focus on the design and implementation of YQR Plates, while abstracting less significant details, allowing us to focus on the development process. Laravel made it easy to maintain and scale our project by utilizing its controller methods, blade files, and database migration. 
> - Lucidchart: Used to design and document our use activity case diagrams.
> - MySQL/MariaDB: MySql-Laravel integration efficiently stores our website’s data. 
> - PhpMyAdmin: Provided a simple interface to view and compare different tables (Users, Restaurants, etc…).
> - SSH (Secure Shell): We were able to connect to our server and issue Laravel commands via the command line interface, e.g. ‘php artisan make:controller ControllerName.’
> - TeamGantt: Allowed us to create Gantt charts, used to visually organize our milestones and development timeline of YQR Plates.
> - UML: As seen above, UML was the standard used to construct our diagrams representing user relationships with data structures. 
> - VS Code: Provided a robust coding environment with effective debugging and plugins allowing us to see each other’s git changes, server file directory, and database all on one platform. 
### 8.0 Software Testing
> 8.1 Correctness Test Cases 
>
> 8.1.1 Correctness #1: Restaurant Owner Custom Dashboard
> - Test whether the correct data is displayed on a restaurant owner’s custom dashboard. The numbers are produced by comparing customers’ preferences to the restaurant owner’s details for each category. 
>
> - Input: Medium, High, Canadian, Dine-in, Take-out, South-East, North-East
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image36.png)
>
> - Output: As expected
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image49.png)
>
> 8.1.2 Correctness #2: Customer Profile View
> - Test if the customer profile view displays the correct preferences after the customer inputs preferences.
>
> - Input: High, Canadian, North-East, North-West, Dine-in, Take-out
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image27.png)
>
> - Output: As expected
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image37.png)
>
> 8.1.3 Correctness #3: Restaurant Promotions 
>
> - Test whether the restaurant details and promotions page displays the correct information after a promotion is input by the restaurant owner.
> 
> - Input: Correctness Test!, Limited Time
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image35.png)
>
> - Output: As Expected
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image11.png)
>
> 8.1.4 Correctness #4: Customer Preferences Update
>
> - Test if preferences update successfully when a customer changes their preferences.
> 
> - Input: Medium, Chinese, Delivery, South-east
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image54.png)
>
> - Output: As expected
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image22.png)
>
> 8.2 Robustness Test Cases
>
> 8.2.1 Robustness #1: Failed Log-In Due To Invalid Credentials
>
> - Test whether the software application provides a descriptive error message for the user during the sign-in process when invalid credentials are entered by a user.
> - Input: Incorrect user credentials
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image55.png)
>
> - Output: As Intended
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image4.png)
>
> 8.2.2 Robustness #2: Failed Sign-Up, Passwords Do Not Match
>
> - Test whether the software application provides a descriptive error message for the user during the sign-up process to create a unique identity on YQR Plates when two different passwords are input by the user.
> 
> - Input: Two different passwords
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image46.png)
>
> - Output: As Intended
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image6.png)
> 
> 8.2.3 Robustness #3: Reset Password with Invalid Birthdate
>
> - Test whether the software application alerts a user via a descriptive error message when incorrect birthdate credentials are input by a user during the reset password process.
> - Input: Incorrect birthdate information
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image42.png)
>
> - Output: As intended
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image45.png)
>
> 8.2.4 Robustness #4: User Tries to Visit Profile After Logging Out
>
> - Test whether the software application provides the user with a descriptive error message if the user attempts to view their profile without logging in. 
>
> - Input: User logs out 
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image38.png)
>
> - Input: User clicks the back arrow to try to reaccess the profile page
>   
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image24.png)
>
> - Output: As Intended
>   
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image2.png)
>
> 8.3 Time-efficiency Tests
> 
> - The method for timing the two tested functions utilized the built-in PHP timing methods and the built-in Laravel log function to print the time to the laravel.log file.
> 8.3.1 Time-efficiency #1: Time to Receive a Restaurant Suggestion Using Preferences
>
> - Test how long it takes for the YQR Plates suggestion generator to provide a restaurant suggestion to customers after preferences are submitted. 
> 
> - Input: After selecting use preferences, the customer clicks the Generate Suggestion button to receive a restaurant suggestion.
>
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image15.png)
>
> - Output: Based on the user preferences selected, a suggestion is generated quickly to the user in just 0.009 seconds
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image20.png)
> 
> - Proof of Time-efficiency:
>  
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image3.png)
> 
> 8.3.1 Time-efficiency #2: Time for Restaurant Owner to Create Their Restaurant
> 
> - Test how long it takes for YQR Plates to store the restaurant’s details in the database and redirect the restaurant owner to their profile after a restaurant owner inputs the details of their restaurant and clicks continue.
>
> - Input: Restaurant owner enters details about their specific restaurant and clicks continue
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image21.png)
> 
> - Output: Restaurant creation is completed and the owner is redirected to their profile page in a time of 0.2635 seconds.
> 
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image16.png)
> 
> - Proof of time-efficiency:
>  
> ![image](https://github.com/PatrickFidek/YQRPlates/blob/main/Diagrams/image39.png)






