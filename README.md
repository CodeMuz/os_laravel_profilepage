### A profile website created with love using [Laravel](https://laravel.com).
####With pages for work, contact and about.

[![Build Status](https://travis-ci.org/CodeMuz/laravel-profile-page.svg?branch=master)](https://travis-ci.org/CodeMuz/laravel-profile-page)

To setup the app locally for development I first recommend choosing only one of the following environments:

 1. Install [Valet](https://laravel.com/docs/5.2/valet) for local Lamp stack (light weight but Mac only)

 2. Install [Vagrant](https://www.vagrantup.com) with [Homestead](https://laravel.com/docs/5.2/homestead) for Laravel

 3. Use [Vagrant](https://www.vagrantup.com) without homestead and you will need to provision apache, mysql, php and laravel in the bootstrap.sh 


### For local development:


1. First choose option 1, 2, 3 or any alternative that suits you.

 
Then install dependencies:
 ![npm](https://img.shields.io/badge/npm-2.11.3-blue.svg) ![homebrew](https://img.shields.io/badge/Homebrew-0.9.9-blue.svg) ![valet](https://img.shields.io/badge/Valet-1.1.12-blue.svg)
![composer](https://img.shields.io/badge/Composer-1.1.0-blue.svg)

 
2. Next clone repository to local:
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```
 
3. Create [.env](https://github.com/laravel/laravel/blob/master/.env.example) file in the project root

 
4. Install the requirements in composer.json
```
$ composer install
```

 
5. Install node modules
```
$ npm install
```

 
6. Initialize mysql (for Mac if chosen mysql)
```
$ mysql.server start
```

 
7. Migrate and seed database
```
$ php artisan migrate:refresh --seed
```

 
8. Build application front end
```
$ gulp --production
```

 
9. Run Unit tests
```
$ vendor/bin/phpunit
```


###  Deploy instructions (example using [Heroku](https://dashboard.heroku.com/))


1. First clone repository to local
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```

 
2. Next create a new heroku application in project folder
```
$ heroku create
```

 
3. Add heroku buildpacks:
```
$ heroku buildpacks:set heroku/php
$ heroku buildpacks:add --index 2 heroku/nodejs
```

 
4. Generate Laravel key and set heroku config var
```
$ php artisan key:generate --show
$ heroku config:set APP_KEY={KEY}
```

 
5. Add ClearDB addon to heroku
```
$ heroku addons:create cleardb
```

 
6. Migrate and seed database
```
heroku run php /app/artisan migrate:refresh --seed
```

 
7. Build and run application:
```
$ git push heroku master
```



##License

Attribution-NonCommercial-NoDerivatives 4.0 International
[CC BY-NC-ND 4.0](http://creativecommons.org/licenses/by-nc-nd/4.0/) 

[![License](https://licensebuttons.net/l/by-nc-nd/3.0/88x31.png)](http://creativecommons.org/licenses/by-nc-nd/4.0/)

###Authors

* Murray Wynnes
    * Website: [http://www.murraywynnes.com](http://www.murraywynnes.com)

###Attribution

1. All authors must be attributed in code and final products of derivative works.
2. Links to all authors' respective websites must be included in code and final products of derivative works.