
## use
To get started, make sure you have Docker installed on your system and Docker Compose, and then clone this repository.
Laravel sail is a light wight command-line interface for interacting with laravel's default docker development environment.

1) cd dev-project
2) clone the https://github.com/Chig8/infoxchange-dev-challenge.git
3) run vendor/bin/sail up
4) it will initialise the containers.
5) database and other important configurations are in .env file
6) open the application in browser (http://127.0.0.1:8000)

## scenarios
YOU CAN USE SAIL TO COMMUNICATE WITH ALL THE CONTAINERS.
1) for Database publish and migrate .vendor/bin/sail artisan migrate
2) to get into mysql container .vendor/bin/sail db mysql
3) for compiling sass, .vendor/bin/sail npm install && npm run dev
4) .vendor/bin/sail composer require spatie/laravel-activitylog
 
more to explore with 'sail' CLI interface. 
