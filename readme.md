Quick Start
# Install Dependencies
composer install

# .env
create .env file with right credentials conforming to the name of your database
touch .env

# Run Migrations
php artisan migrate


# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate

## Additional information
For the implementation of the messaging to the Email, I have just given a description of what is suppose to be done but when you need it implemented I can easily do that.
I have also added in registration form the type of person who is registering. you are either an admin, gate guard or technician.. For the system to work right the gate guard will not be given full rights to the system. He will only submit a truck and edit it. 
For the technician he will as well be given some few rights , He will only view the submitted trucks but not be able to edit or create a truck model. The admin has all the rights and the system can only accept registration of maximum five admins because  these guys have full rights to the system. 
Some of these functionalities have not been implemented yet for the purposes of testing by you (calltronix)

## Author
Don Phelix - Full Stack Web developer @Tangaza PesaWorld


The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
