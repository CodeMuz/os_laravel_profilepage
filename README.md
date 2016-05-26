# A Profile page created with love using Laravel. With pages for work, contact and about.

[![Build Status](https://travis-ci.org/CodeMuz/laravel-profile-page.svg?branch=master)](https://travis-ci.org/CodeMuz/laravel-profile-page)

To setup the app locally for development I recommend choosing one of the following environments:

Option 1 (with virtual machine and great for sharing) :+1:

 * i) Use vagrant without homestead and you will need to provision apache, mysql, php and laravel in the bootstrap.
 * ii) Use homesetad laravel (see https://laravel.com/docs/5.2/homestead)

Option 2

 * i) Install Valet for local Lamp stack (light weight but Mac only)


#### For local development:

Dependencies:
[![npm](https://img.shields.io/badge/npm-2.11.3-green.svg)

homebrew, [valet](https://laravel.com/docs/5.2/valet), composer, node, git

1. Install: (Option 1 or 2) with node, git, composer, homebrew and [valet](https://laravel.com/docs/5.2/valet)


2. Clone repository to local
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```
3. Create .env file in the project root
see https://github.com/laravel/laravel/blob/master/.env.example


4. Install Composer
```
$ composer install
```

5. Install node modules
```
$ npm install
```

7. Initialize database
```
$ mysql.server start
```

8. Migrate and seed database
```
$ php artisan migrate:refresh --seed
```

9. Build application
```
$ gulp --production
```

10. Run Unit tests
```
$ vendor/bin/phpunit
```

####  Deploy instructions (example using Heroku)

1. Clone repository to local
```
$ git clone git@github.com:CodeMuz/laravel-profile-page.git
```

2. Create heroku application
```
$ heroku create
```

4. Add heroku buildpacks:
```
$ heroku buildpacks:set heroku/php
$ heroku buildpacks:add --index 2 heroku/nodejs
```

5. Generate Laravel key and set heroku config var
```
$ php artisan key:generate --show
$ heroku config:set APP_KEY={KEY}
```

6. Add ClearDB addon to heroku
```
$ heroku addons:create cleardb
```

7. Migrate and seed database
```
heroku run php /app/artisan migrate:refresh --seed
```

8. Build and run application:
```
$ git push heroku master
```


##License

[CC BY-NC-ND 4.0](http://creativecommons.org/licenses/by-nc-nd/4.0/) Attribution-NonCommercial-NoDerivatives 4.0 International

[![License](https://licensebuttons.net/l/by-nc-nd/3.0/88x31.png)](http://creativecommons.org/licenses/by-nc-nd/4.0/)

###Authors
* Murray Wynnes

###Attribution

1. All authors must be attributed in code and final products of derivative works.
2. Links to all authors' respective websites must be included in code and final products of derivative works.