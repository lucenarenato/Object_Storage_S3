# Upload file on S3 from Route

## Laravel PHP Framework

### S3 bucket and upload file in Laravel with IAM user - SPA Laravel & AngularJS
https://www.youtube.com/watch?v=P2_-WPd6a7g
https://github.com/amitavroy/learningl5

- https://s3.console.aws.amazon.com
- https://www.youtube.com/watch?v=2eEok752-qc&list=PLkZU2rKh1mT81nK9LgCV8l7kuSr6Xoj2x&index=1

- composer require league/flysystem-aws-s3-v3
- composer require league/flysystem-aws-s3-v3

S3_KEY=
S3_SECRET=
S3_REGION=us-east-1
S3_BUCKET=


- http://localhost:8000/test

```json

{
"name": "laravel/laravel",
"description": "The Laravel Framework.",
"keywords": ["framework", "laravel"],
"license": "MIT",
"type": "project",
"require": {
    "php": ">=5.6.4",
    "barryvdh/laravel-debugbar": "^2.4",
    "fzaninotto/faker": "^1.6",
    "laravel/framework": "5.4.*",
    "laravel/socialite": "^3.0",
    "laravel/tinker": "~1.0",
    "unisharp/laravel-ckeditor": "^4.6",
    "league/flysystem-aws-s3-v3": "~1.0"
},
"require-dev": {
    "mockery/mockery": "0.9.*"
},
"autoload": {
    "classmap": [
        "database"
    ],
    "psr-4": {
        "App\\": "app/"
    }
},
"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/"
    }
},
"scripts": {
    "post-root-package-install": [
        "php -r \"file_exists('.env') || copy('.env.example', '.env');\""
    ],
    "post-create-project-cmd": [
        "php artisan key:generate"
    ],
    "post-install-cmd": [
        "Illuminate\\Foundation\\ComposerScripts::postInstall",
        "php artisan optimize"
    ],
    "post-update-cmd": [
        "Illuminate\\Foundation\\ComposerScripts::postUpdate",
        "php artisan optimize"
    ]           
},
"config": {
    "preferred-install": "dist",
    "sort-packages": true,
    "optimize-autoloader": true
}
  }

```

Renato Lucena - 2019
## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


