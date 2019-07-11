# Usando Object Storage ou S3
## Laravel, Lumen e Symfony

- symfony-upload-s3
- dzone-s3-lumen-master
- Laravel-AmazonS3-Video-master
- learningl5-2.2
- lumens3

# FileSystems.php

$ composer install aws/aws-sdk-php
$ composer require league/flysystem-aws-s3-v3

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

- https://s3.console.aws.amazon.com
- https://docs.aws.amazon.com/aws-sdk-php/v2/guide/service-s3.html
- http://docs.ceph.com/docs/master/radosgw/s3/php/
- https://github.com/aws/aws-sdk-php-symfony
- https://gist.github.com/lucenarenato/3d069df0f7516402d038186957eb01bf
- https://gist.github.com/lucenarenato/83a9004de49a686b6b3ec6d4d4c7a978

> Renato Lucena - 2019 - http://renatolucena.net
<br>
<a href="https://twitter.com/cpdrenato"><img src="https://img.shields.io/twitter/url/http/shields.io.svg" alt="Follow @cpdrenato on Twitter"></img></a>
<br>
Artigo referente a este Assunto: http://blog.renatolucena.net/usando-object-storage-ou-s3/

AWS_KEY=0000000
AWS_SECRET=00000000+AeaqNLB2
AWS_REGION=us-east-1
AWS_BUCKET=larateste
#AWS_URL=https://s3.amazonaws.com/

