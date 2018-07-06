##Cencus Population

##Live_url_Link
http://inmar-census.s3-website.ap-south-1.amazonaws.com/

## FRONT END

# census-ui


> A Vue.js project

## Build Setup

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


## Backend

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.5/installation#installation)


Clone the repository

    git clone https://github.com/teshukatepalli/census-population.git

Switch to the repo folder

    cd census-population
    cd census-api

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

** Database seeding

Run the database seeder and you're done


    php artisan migrate:refresh --seed
    php artisan serve