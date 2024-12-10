# Job-Management-and-Application-Tracking-System
# NetWork
A Job Search and Application Management System.
CS-5356-001 Advanced Database Management Systems.
# Team
Sai Charani Arumilli<br/>
Veena Posani<br/>
Mugdha Ektare<br/>
Shweta Koyande

# Table of Contents:
1. Project Overview. 
  1.1. Scope of the Project 
  1.2. Target Use 
    1.2.1. Candidate User functionalities 
    1.2.2. Recruiter User functionalities 
  1.3. Requirements 
  1.4. Team Composition 
2. Database Overview
3. Technical Specification 
4. Challenges and solutions 
5. Personal Contributions 
6. Learning Outcomes
7. Teamwork and Collaboration
8. Challenges Faced
9. Skills Developed
10. Future Application
11. Conclusion
12. References

# 1. Project Overview:
NetWork is a database management system that helps candidates looking for jobs and allows
recruiters to post job applications while tracking candidate applications. This system also tracks
the status of the candidate’s applications and provides updates such as status of the application,
round links, round deadlines to the candidate and offers recruiters the option to update results of
candidates. In this system, users can login to application using mail id and password. If there is no
existing account, users have the option to create a new account before proceeding to the home
page.
# 1.1. Scope of the Project:
The main objective of the project is to facilitate candidates searching for jobs and companies
looking for candidates to fill open positions based on requirements. This system significantly
tracks the status of the applications and provides updates to the users through notifications section.
From this section, candidate will be able to view the status and updates from recruiter about
applications.
# 1.2. Target Users:
The target users here include candidates who are job seekers, companies looking for candidates
and database administrator who will look over the technical aspects and managements of the
database. Below describes the functionalities included in the application for the target users –
candidates, recruiters.
# 1.2.1. Candidate User functionalities:
- Login/Sign up: Job seekers who have access to login/signup to application.
- Home page after Login/Sign up:
- After successful login, job seekers can view home page which
displays latest job postings, recommended jobs based on major and filters such as Major, Desired
positions, Country, Organization to search for jobs.
- Apply for Jobs: If user wish to apply for a job, he can click on the job title and view details of
that job such as Job title, Domain, Organization, Payrate, posted date, Application deadline,
Description, location and option ‘Apply’ to click in order to apply successfully.
- Navigation Panel: In navigation panel, user will be able to navigate to profile page, notifications,
settings, and logout from application.
- Profile Section: This section displays profile of user and active application lists.
- Notifications Section: This section provides updates to user such as status of the applications
such as interview round information, Job offers and Rejections information.
- Settings: User will be able to update details of his profile such as first name, last name, phone
number, education level, major, desired position, email address.
- Logout: User can securely logout from his account after browsing through application and the
page will be redirected to login page.

# 1.2.2. Recruiter User functionalities:
- Login/Sign up: Recruiters from organizations who have access to login/signup to system.
- Home page after Login/Sign up: After successful login, recruiters can view home page which
displays posted jobs with an option to view the applications received for that job, and a form allows
to post new jobs with details such as Job’s domain, title, description, location, payrate, pay period,
interview rounds information.
- View Applications Received: By clicking on the option view, recruiter can view applications
received for that job and will be able to reject or send interview invite to user based on his decision.
- Navigation Panel: In navigation panel, user will be able to navigate to profile page, notifications,
settings, and logout from application.
- Profile Section: This section displays profile of the recruiter.
- Notifications Section: This section provides notification of new application received.
- Settings: User will be able to update details of his profile such as first name, last name, phone
number, education level, major, desired position, email address.
- Logout: User can securely logout from his account after browsing through application and the
page will be redirected to login page.

# 1.3. Tools and Requirements:
Languages used: HTML, CSS, Java Script, PHP, MySQL
Server: XAMPP
Database: phpMyAdmin
Development Environments: Visual Studio Code, XCode, Jupyter notebook for synthetic data
generation.

# 1.4. Team Composition:
I have worked on this project in a team of 4 including myself, Mugdha Ektare, Veena Posani , and
Shweta Koyande. We distributed this project in such a way that everyone gets equal chance to
work in every concept. Here everyone had played roles of UI designer, DBA. I have worked
collaboratively with Mugdha on few pages like getnotifications.php where I have worked on
displaying the notification part when user gets a notification with interview round details, and with
veena on registration pages of candidate and recruiter, etc. where I have implemented the php
logics to connect and insert data into databases. Lastly with Shweta on candidate display page
where I have added a condition to prevent allowing users to apply same jobs multiple times. Apart
from this I have played a role as application designer by myself and designed the flow of the
application and completely worked on apply logic, and displaying notifications, and login .php
where the validation happens when user login to the application.

# 2. Database Overview:
The project mainly focusses on connecting with the database which maintains all information
records of the candidate, recruiter, and admin. Here the scope of the project is to provide seamless
experience throughout the system and maintain records of the users and keep track of user
applications and inform them through notifications. To store all this data, we have created a
database called ‘mydb’ in phpMyAdmin. In this database 13 tables are created to store various
information. Below figure shows the picture of the data base and the tables created.
The ER diagram below represents the tables and relationships between them in the database.
# 3. Technical Specifications:
To implement the project, we have used relational database model and created tables. Here we
have created 13 tables to store details of applications, candidate, recruiters, rounds, etc. For this
phpMyAdmin has been used to store and manipulate data and the database is connected using
XAMPP server with localhost as a server. After creating tables, for testing purposes initially we
have generated few records of synthetic data using python and imported them to database. After
generating synthetic data using python’s faker library, the data is downloaded into .csv file and
imported into tables. Below figure shows the code of how synthetic data has been generated.
# 4. Challenges and solutions:
- Foreign key constraint issues: while inserting data into tables, initially while inserting one by
on we faced an issue with tables that have foreign keys. After going through error, we have
identified that this is caused due to no data in foreign keys tables. This issue has been resolved by
first inserting data in foreign key tables and later inserting data that the table key is referred.
- Data Import issues: While importing synthetic data into database tables, I have faced few errors
in collation. This has been solved by changing the collation code to ‘utf8mb4_unicode_ci’ to
resolve the error.
# 5. Personal Contributions:
In this project I have played all major roles along with other team members such as “UI designer
and Query Developer” where my task was to design notifications module for target users and create
a database interactive page for the modules, “Application Designer” where I have taken
responsibility to design the flow of the application including all major functionalities and
“Database Administrator” where my task was to generate synthetic data using python and manage
the database operations such as insert, delete, select, export, import and other functionalities.
Application Designer Role:
As an application designer, initially when we were discussing about the scope of the project, I have
taken responsibility to design the flow of the application to provide a seamless interface experience
for user. To achieve this, I thought about how the flow should be and after brain storming, came
to an idea by taking start point as when user login or sign up if there is no account. Below figure
shows the flow of the application that I have designed.
# Technical implementation:
Here the flow of the session goes like this -
1. Display login page if user have account login directly. If not, user can create and new account
and login.
2. If user type is candidate, then after login he can view, apply for jobs, and get updates regarding
jobs on notifications module.
3. if user type is recruiter, then after login he can post new jobs, view posted jobs, view applications
received for posted jobs and able to reject or proceed to further interview rounds.
4. Lastly, when recruiter send job offer or rejection, candidate receive that information through
notifications module and session ends.
5. Here settings are additional functionalities.

# UI Designer and Query developer:
# - Login.php:
# Workflow:
Here to achieve the scope of the project, we integrated HTML and PHP and constructed the code
based on requirement. Here I have specifically worked on:
1. Firstly, on the task where it should allow user to login. For this I have used php to connect to
the database and passed values of username and password to the login.php file. To validate the
credentials with database, I have used MySQL query statement select with where condition passing
username and password as values. And redirected the page to home page of the user after
successful login.
Technical Implementation:
Here we have two target users - candidate and recruiter. It should check in respective tables in
database and validate credentials. To achieve this, I have used if condition to check if user type is
candidate or recruiter. Accordingly, it checks in tables and fetch username and compare them. If
passes, it will redirect to page else it will stay on same login page. 
# Workflow:
Here to achieve the scope of getting notifications to the candidate, I have worked on MYSQL
query that fetches the data based on the candidate id by joining active rounds, applications, jobs,
job round, round types, organizations tables in the database and displays the details such as
application id, job id, title, information, organization name, round name, link, start time and end
time and allows candidate to select mark as completed. And to achieve the scope of getting new
application received notification for recruiter, I have implemented a query that selects details of
application such as application id, job id, candidate id, job title, application date, status by joining
applications, jobs, recruiter tables and displays them as an information to the recruiter with an okay
button for acknowledgment. When user clicks on okay, the notification disappears.
Technical Implementation:
Here for the target user recruiter to achieve the notifications, I have first connected to database and
get recruiter id value. Now to display notifications, I have fetched all required details using select
MYSQL statement and displayed using echo statements and html. Below figure shows the
technical code implementation.
And for the target user candidate to achieve the notifications of job round details, I have
implemented MYSQL query that joins the required tables as mentioned in above workflow and
displayed them using echo statements and html. To dismiss the notification after clicking on mark
as completed, java script function “dismissNotification()” is used. Below snippets shows the
technical code implementation.
# - Apply.php
Workflow:
To allow user to apply for jobs, I have implemented a php code that connects to database and
updates applications table when candidate applies for a job and keep tracks of applications and
reflects in candidate profile page.
Technical Implementation:
To achieve this, first connect to database and implemented insert query inorder to keep track and
redirected to jobDisplay page to reflect the applied jobs of that candidate. Below snippets shows
the technical code implementation.
Database Administrator:
As a database admin I have handled tasks like generating synthetic data for tables using faker
library in python where it generates random data for given attribute in each range. Here the below
code shows how 20 records data has been generated for the table ‘city’.
Here after generating data, it is downloaded into csv file using python function and imported to
the database.

# 6. Learning Outcomes:
While working on this project,
1. When deciding about what database model to be used I went through different database models
like relational object, NOSQL, cloud and have learnt about the specification of using these models.
2. Also when writing code, I have revisited the basic concepts of SQL queries and how pho can be
included in html to run the file in server.
3. By revising the basic SQL statements such as CREATE, UPDATE, INSERT, etc., I have gained
knowledge on using them based on the requirements and setting keys to primary and foreign keys.
4. Since I must display information from different tables, I have learnt more about how to use
JOIN query and how to join tables based on common columns and impact of different join types
on result.
5. While importing the data into tables, I have acquired knowledge on what collation should be
there in data to import into the database.
6. As this is the first time, I worked on XAMPP, I have learned about the installation and setup
steps and about the ports to be used to connect to the database.
7. Learned how to develop an application from scratch and system design the flow of application.
7. Teamwork and Collaboration:
While working as team we had good experience as we discussed many aspects of the projects, and
everyone gave their own inputs. To make sure that we are on same page, we have shared our work
through teams and worked in collaborative environment. As we have worked together, we met,
and tried to resolve if anyone stuck in any particular task which improved my problem-solving
skills, error handling skills and communication skills.

# 8. Challenges Faced:
- Foreign key constraint issues: While inserting data into tables, initially while inserting one by
one we faced an issue with tables that have foreign keys. After going through error, we have
identified that this is caused due to no data in foreign keys tables. This issue has been resolved by
first inserting data in foreign key tables and later inserting data that the table key is referred.
- Data Import issues: While importing synthetic data into database tables, I have faced few errors
in collation. This has been solved by changing the collation code to ‘utf8mb4_unicode_ci’ to
resolve the error.
- Candidate Apply: while working on candidate apply, I have noticed an issue where when it
allowed candidate to apply to same job multiple times. I have resolved this by checking if the job
is existing in the application table and display as you’ve already applied if that application exists
in database.
- Recruiter notifications: While designing recruiter notifications, the notification stacked up. To
resolve this, I have included a JavaScript function that disappears the notification on clicking on
okay button.

# 9. Skills Developed:
1. As this is the first time, I worked on XAMPP, I have learned about the installation and setup
steps and about the ports to be used to connect to the database.
2. I have learned on how to implement arrays in php as this is the new concept for me. I have
learned about pushing the values into array in php.

# 10. Future Application:
In future if I get an opportunity to work in database management the knowledge acquired here in
developing database management applications, will be helpful for me in designing the
applications, implements the php in the project if required. I have developed the project from the
scratch and got an idea on flow of implementation, connecting pages, and managing database.
With this knowledge, if I get an opportunity on developing the application, this experience would
be very useful for me in designing and implementing the development of my project.

# 11. Conclusion:
In conclusion, I have contributed my work on developing a database management system called
NetWork, which is useable by two types of users – Candidate and Recruiter. Here the application
allows candidate to search for jobs, apply and get notification on applied jobs. Where from
recruiter side, it allows him to post new jobs and view applications received for his jobs and
notifications. By doing this project I have revised all the php concepts used and introduced to new
kind of server environment – XAMPP. While working on this project, I have worked on error
handling by doing echo on where the code has problem and solved it. By doing this I have learned
more on how to handle errors without getting stuck on an issue. This project has improved my
communication skills as we did teamwork and got valuable insights from other team members.

# 12. References:
1. PHP related syntax - https://www.w3schools.com/php/
2. For Python library - faker - https://faker.readthedocs.io/en/master/
2. For Wireframes - https://app.moqups.com/
