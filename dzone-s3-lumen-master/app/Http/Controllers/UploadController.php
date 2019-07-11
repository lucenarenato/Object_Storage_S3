<?php

namespace App\Http\Controllers;

use Aws\S3\S3Client;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function getForm()
    {
        $view = view('upload');

        return $view;
    }

    public function postUpload(Request $request)
    {
        $file = $request->image;
        $fileName = $_FILES['image']['name'];

        $bucket = 'larateste';

        $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'us-east-1',
            'credentials' => [
                'key' => env('S3_KEY'),
                'secret' => env('S3_SECRET'),
            ],
        ]);

        try {
            // Upload data.
            $result = $s3->putObject([
                'Bucket' => $bucket,
                'Key' => $fileName,
                'SourceFile' => $file
            ]);

            // Print the URL to the object.
            echo $result['ObjectURL'] . PHP_EOL;
        } catch (S3Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

}
