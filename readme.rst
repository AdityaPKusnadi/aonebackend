==================================================
Aoneproject Backend (CodeIgniter 3)
This is the backend of the Aoneproject, a web application built using CodeIgniter 3. The backend serves as the API for the frontend to access the data stored in the database.

Preview
You can preview the backend at the following URL:

https://apk-project.my.id/aonebackend/users

Code
The source code for the backend can be found at the following GitHub repository:

https://github.com/AdityaPKusnadi/aonebackend

API
The API provides the following endpoints:

/users: Returns the global data for all users.
/users/{id}: Returns the detailed information for the user with the specified id.
Database
The backend uses the following database:

Database name: aone_test
Table name: users
Columns:
id (INT auto_increment)
first_name (varchar(16))
last_name (varchar(16))
email (varchar(30))
avatar (text)
CSS Framework
The backend does not use any CSS framework, as it only serves as an API for the frontend.