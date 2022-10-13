**DEV Excersise API**

**Tools used**
Backend: PHP & Laravel
Database: I used MariaDB, as I used XAMPP for my server, though artisan serve was also used.
With XAMPP it's nice having a visual for any database, their phpmyadmin is good, and is a mariaDB.

POSTMAN/Tinker: Good for JSON requests, saves alot of time and helps with testing.

Also used laravels base user model and added onto it as needed, no real reason not too. 
It's set up well for auth and the purpose of the exercise.

**Versioning**
I haven't implemented versioning in this project, as it's just an test api and for the sake of time. However, it would be fairly easy to implement
by versioning directories like Controllers->API->V1->Controllers and same with resources, requests, etc..., as they're the most likely to change
and clients should have the option to opt in and out of new version features depending on context.

**Set-up**
All that's necesarry is setting up the database. Easiest way for me is to open cmd at the folder route and running
*php artisan migrate:fresh --path=/database/migrations/2022_10_09_150240_create_departments_table.php*
*php artisan migrate --path=/database/migrations/2014_10_12_000000_create_users_table.php*
in that order. As opposed to artisan migrate, laravel does it based off of time created for what tables are loaded
first, and departments needs to be loaded first. Probably off of filename, but I didn't want to mess with this, plus
it's only an additional line of code.

**Endpoints and creation**
*prefix with /api*

Create new departments at localhost/api/department with POST requests - **{"departmentName": "Name"}**
*Not* at /department/create. This is because /create would likely be a form to create a department
and then it'd POST to department anyway. 
*Return ID, NAME*

Create new user at api/users - **{"name": "Name1" "email": "email1" etc...}**
*Return id, email, name, bio, department_id* Not Password. Can be changed on 1 line, but I decided not to return this data.

/users fetches all users, excluding passwords, filterable by name, department.
/departments fetches all departments. 

/login for login requests
/register can also be used, but for breif /users also works for creating them

**Seeding**
Factories and seeding set up if test data is desired. I find it easier than POSTing alot of data
*php artisan db:seed --class=DepartmentSeeder* *php artisan db:seed --class=UserSeeder*
*Creates 2 departments for 50 users

**Filtering**

Filtering by username is done with the username request (see controller.php)

**auth**

AuthController.php covers all authentication and login details.
Afterwards it checks against other department names and only displays emails
based off of them.