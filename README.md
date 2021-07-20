# DevMemories
Create en app to help developers to store different content and be able to reuse it quickly

# Install the project
-   Clone / fork the repository on your computer
-   Install [Composer](https://getcomposer.org/download/) if needed
-   Use composer to install project dependencies
```sh
composer i
```
- Change the database informations in the .env file in your folder project
> __If you have some sensitive credentials, please create a .env.local file which will be a copy of the .env file and put your sensitive data inside.__

### Create and populate the database
```sh
# Create database with symfony doctrine ORM
php bin/console doctrine:database:create

# Create the tables
php bin/console make:migration
php bin/console doctrine:migration:migrate

# Populate the database with fake data
php bin/console doctrine:fixtures:load
```
### Lauch the symfony server
```sh
php bin/console server:start --no-tls
```

### [Display the page in the browser](http://localhost:8000/) at localhost

You can connect to the application with identifiers below:
> user@user.fr  `Password:` _password_  
> admin@admin.fr  `Password:` _password_

### ENJOY
