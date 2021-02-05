Hey, welcome to My Portfolio Project :)

If you want to clone it and see by yourself how it looks like, there are few steps :
    - git clone the project
    - Run composer install & yarn install
    - Copy the .env file to .env.local
    - Uncomment the line concerning your database system (postGre or MySQL) & comment the other one
    - Write your DB system id, password, host & dbName in the uncommented line
    - Run php/bin console doctrine:database:create
    - Run php/bin console doctrine:migrations:migrate
    - Run symfony server:start
    - Run yarn encore dev
    - Enjoy :)
