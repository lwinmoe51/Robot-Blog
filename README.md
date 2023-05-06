[x] Login Page
[x] Register Page
[X] form validation for registeration form
[x] Composer and autoload
    [x] run "composer init"
    [x] modify composer.json to add PSR-4 Autoload setting
        [x] add this after "require" section. Folder path will be based on how u created.
            "autoload": {
                "psr-4": {
                "Libs\\": "_classes/Libs/",
                "Helpers\\": "_classes/Helpers/"
                }
            }
    [x] Run "composer dump-autoload" . 
[x] Redirecting function with array in HTTP.php
[x] Redirectiing function with query in HTTP.php
    [x] php function overloading (solve with checking argument type)
[x] create users table in phpmyadmin
[x] create MySQL.php file that for connection to database
[x] create users table data inserting class in UsersTable.php
[x] insert data from register form to database (usercreate.php)
[x] if registeration success, redirect to index.php (login form) with success alert
[x] add faker . Run "composer require fakerphp/faker"
[] create login.php to check form data from login form with database. if user is exit, redirect to blog home page with Auth url query. if user is not exit, redirect back to login form page(index.php) with error message.
[] modify validation.php for login also

