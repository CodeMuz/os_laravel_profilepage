### A profile website created with love using [Laravel](https://laravel.com).
####With pages for work, contact and about.

[![Build Status](https://travis-ci.org/CodeMuz/laravel-profile-page.svg?branch=master)](https://travis-ci.org/CodeMuz/laravel-profile-page)

To setup the app locally for development I first recommend choosing one of the following environments:

Option 1 (with virtual machine and great for sharing) :+1:

 * i) Use vagrant without homestead and you will need to provision apache, mysql, php and laravel in the bootstrap.
 * ii) Use homesetad laravel (see https://laravel.com/docs/5.2/homestead)

Option 2

 * i) Install Valet for local Lamp stack (light weight but Mac only)


### For local development:


First choose option 1 or 2 , or any alternative that suits you.

 ----------
First Install dependencies:
 ![npm](https://img.shields.io/badge/npm-2.11.3-blue.svg) ![homebrew](https://img.shields.io/badge/Homebrew-0.9.9-blue.svg) ![valet](https://img.shields.io/badge/Valet-1.1.12-blue.svg)
![composer](https://img.shields.io/badge/Composer-1.1.0-blue.svg)

 ----------
Then clone repository to local:
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```
 ----------
Create [.env](https://github.com/laravel/laravel/blob/master/.env.example) file in the project root

 ----------
Install the requirements in composer.json
```
$ composer install
```

 ----------
Install node modules
```
$ npm install
```

 ----------
Initialize mysql (for Mac if chosen mysql)
```
$ mysql.server start
```

 ----------
Migrate and seed database
```
$ php artisan migrate:refresh --seed
```

 ----------
Build application front end
```
$ gulp --production
```

 ----------
Run Unit tests
```
$ vendor/bin/phpunit
```


----------


###  Deploy instructions (example using [Heroku](https://dashboard.heroku.com/))


First clone repository to local
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```

 ----------
Next create a new heroku application in project folder
```
$ heroku create
```

 ----------
Add heroku buildpacks:
```
$ heroku buildpacks:set heroku/php
$ heroku buildpacks:add --index 2 heroku/nodejs
```

 ----------
Generate Laravel key and set heroku config var
```
$ php artisan key:generate --show
$ heroku config:set APP_KEY={KEY}
```

 ----------
Add ClearDB addon to heroku
```
$ heroku addons:create cleardb
```

 ----------
Migrate and seed database
```
heroku run php /app/artisan migrate:refresh --seed
```

 ----------
Build and run application:
```
$ git push heroku master
```

----------

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