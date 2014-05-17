Zend Form example
=================

In this example, I've developed a small web application, using Zend Framework 1,
that is a basically signup and login form, with the possibility to search an user 
by his name or email and get the results.
The application has 4 controllers and views, index, auth, error and search, 3 forms for login, register and search,
1 model class for the database access.
The application uses Zend_Auth component for the users signup and login. The passwords are MD5 encrypted.
The search is reserved only to the registered user, so in order to search an user you should be logged in.
The forms use Zend_Validators to check email, passwords and text inputs.

To install, clone the files in your Zend application folder and use the users.sql to create the database structure.
