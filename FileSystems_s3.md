# FileSystems.php

$ composer install aws/aws-sdk-php
$ composer require league/flysystem-aws-s3-v3

### Uma abordagem mais segura é: (A safer approach is:)
* 1-AWS Console -> IAM -> Policies -> Create policy
* 2-Service = S3
* 3-Actions = (only the minimum required, e.g. List and Read)
* 4-Resources -> Specific -> bucket -> Add ARN (put the ARN of only the buckets needed)
* 5-Resources -> Specific -> object -> check Any or put the ARN's of specific objects
* 6-Review and Save to create policy
* 7-AWS Console -> IAM -> Users -> Add user
* 8-Access type -> check "Programmatic access" only
* 9-Next:Permissions -> Attach existing policies directly
* 10-Search and select your newly created policy
* 11-Review and save to create user
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
### Creating a Connection PHP
```php
<?php

use Aws\S3\S3Client;

define('AWS_KEY', 'place access key here');
define('AWS_SECRET_KEY', 'place secret key here');
$ENDPOINT = 'http://objects.dreamhost.com';

// require the amazon sdk from your composer vendor dir
require __DIR__.'/vendor/autoload.php';

// Instantiate the S3 class and point it at the desired host
$client = new S3Client([
    'region' => '',
    'version' => '2006-03-01',
    'endpoint' => $ENDPOINT,
    'credentials' => [
        'key' => AWS_KEY,
        'secret' => AWS_SECRET_KEY
    ],
    // Set the S3 class to use objects.dreamhost.com/bucket
    // instead of bucket.objects.dreamhost.com
    'use_path_style_endpoint' => true
]);
```

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
- https://gist.github.com/lucenarenato/3d069df0f7516402d038186957eb01bf
- https://gist.github.com/lucenarenato/83a9004de49a686b6b3ec6d4d4c7a978

> Renato Lucena - 2019 - http://renatolucena.net
<br>
<a href="https://twitter.com/cpdrenato"><img src="https://img.shields.io/twitter/url/http/shields.io.svg" alt="Follow @cpdrenato on Twitter"></img></a>
<br>
Artigo referente a este Assunto: http://blog.renatolucena.net/usando-object-storage-ou-s3/
