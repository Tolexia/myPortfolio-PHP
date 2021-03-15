
Hey, welcome to My Portfolio Project :)

If you want to clone it and see by yourself how it looks like, there are few steps :

In a terminal
*************
* git clone the project
* Move into the newly created folder
* Run composer install & yarn install
* 
In the root folder of the project
*********************************
* Copy the .env file to .env.local and open it
* Uncomment the line concerning your database system (postGre or MySQL) & comment the other one
* Write your DB system id, password, host & dbName in the uncommented line

Return to the terminal
**********************
* Run php bin/console doctrine:database:create
* Run php bin/console doctrine:migrations:migrate
* Run php bin/console doctrine:fixtures:load
* Run symfony server:start
* Run yarn encore dev

In your favorite navigator
**************************
* Open a new tab on your localhost port
* Enjoy :)
