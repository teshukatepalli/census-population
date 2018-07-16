##Cencus Population

##Live_url_Link
http://inmar-census.s3-website.ap-south-1.amazonaws.com/
# Getting started

## Backend


## Installation

Install Latest Xampp Version on PHP >= 7.1.3

    https://www.apachefriends.org/download.html (Download PHP >= 7.1.3 version)

#Install Laravel

    Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.5/installation#installation)

#install Composer 

    https://getcomposer.org/Composer-Setup.exe
    install the Composer.exe

#Download Laravel installer using Composer
    
    open Command Prompt and enter the command prompt
    composer global require "laravel/installer"

Clone the repository

    git clone https://github.com/teshukatepalli/census-population.git

Switch to the repo folder

    cd census-population
    cd census-api

Install all the dependencies using composer

    composer install

Create Database in sql

    Start Xampp 
    Start Apache and MySql 
    Open MySql admin panel using Localhost/phpmyadmin
    Create Database with the name of census
    Create User account with (username:root password: (password field remains blank))

set database connection in.env 

    DB_DATABASE=census
    DB_USERNAME=root
    DB_PASSWORD=    

Run the database migrations with data seeding(**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## FRONT END

# census-ui


> A Vue.js project

## Build Setup

install Node js

    https://nodejs.org/dist/v8.11.3/node-v8.11.3-x64.msi
    Install node-v8.11.3-x64.msi
    Open node command Prompt

Switch to the repo folder

        cd census-population
        cd census-ui
``` bash
# install dependencies
npm install


# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report

# run unit tests
npm run unit

# run e2e tests
npm run e2e

# run all tests
npm test
```

For a detailed explanation on how things work, check out the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).