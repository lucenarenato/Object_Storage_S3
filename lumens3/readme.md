# Teste S3 com Lumen
##  Upload file on S3 from Route
- https://s3.console.aws.amazon.com

S3_KEY=
S3_SECRET=
S3_REGION=us-east-1
S3_BUCKET=


- http://localhost:8000/teste

```
composer create-project laravel/lumen lumens3 "5.6.*"
composer require league/flysystem-aws-s3-v3
php artisan key:generate 
sudo chmod -R 777 storage/
php -S localhost:8000 -t public

```
Laravel 5 log viewer
======================

Install via composer
```
composer require rap2hpoutre/laravel-log-viewer
```

Add the following in `bootstrap/app.php`:
```php
app.php $app->withFacades();
$app->register(\Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class);
```

Explicitly set the namespace in `app/Http/routes.php`:
```php
$router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer'], function() use ($router) {
    $router->get('logs', 'LogViewerController@index');
});
```
* [Fonte LumenLogViewer](https://github.com/rap2hpoutre/laravel-log-viewer)

# FileSystems.php

$ composer install aws/aws-sdk-php
$ composer require league/flysystem-aws-s3-v3

### Uma abordagem mais segura é: (A safer approach is:)
AWS Console -> IAM -> Policies -> Create policy
Service = S3
Actions = (only the minimum required, e.g. List and Read)
Resources -> Specific -> bucket -> Add ARN (put the ARN of only the buckets needed)
Resources -> Specific -> object -> check Any or put the ARN's of specific objects
Review and Save to create policy
AWS Console -> IAM -> Users -> Add user
Access type -> check "Programmatic access" only
Next:Permissions -> Attach existing policies directly
Search and select your newly created policy
Review and save to create user
- Desta forma, você terá um usuário com apenas o acesso necessário.

## AWS
```php
's3' => [
         'driver' => 's3',
         'key' => 'AKIAQS42OR6PYFOITQFY',
         'secret' => '000000000+AeaqNLB2',
         'region' => 'us-east-1',
         'bucket' => 'storage_teste',
     ],
```

### Locaweb Object Storage

## Object Storage Locaweb 
```php
      's3' => [
         'driver' => 's3',
         'version' => 'latest',
         'endpoint' => 'https://lss.locawebcorp.com.br',
         'account' => 'Locaweb CORP Object Storage',
         'key'    => '53RBB2CGBA2EJ21GDZ7A',
         'secret' => '00000000000000000000',
         'region' => '',
         'bucket' => 'storage_teste',
         'Body'   => 'Hello, world!',
         'ACL'    => 'public-read',
      ],
```

## php

```php
<?php
// Include the AWS SDK using the Composer autoloader.
require '/home/berman/vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
$bucket = 'gps-photo.org';
$keyname = 'my-object-key';
// Instantiate the client.
$s3 = S3Client::factory(array(
    'profile' => 'default',
    'region' => 'us-east-1',
    'version' => '2006-03-01'
));
try {
    // Upload data.
    $result = $s3->putObject(array(
        'Bucket' => $bucket,
        'Key'    => "myFolder/$keyname",
        'Body'   => 'Hello, world!',
        'ACL'    => 'public-read'
    ));
    // Print the URL to the object.
    echo $result['ObjectURL'] . "\n";
} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}
```

- https://s3.console.aws.amazon.com
- https://docs.aws.amazon.com/aws-sdk-php/v2/guide/service-s3.html
- http://docs.ceph.com/docs/master/radosgw/s3/php/

> Renato Lucena - 2019

## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
