<?php

namespace App\Controller;

use Aws\S3\S3Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class DefaultController extends AbstractController {
	/**
	 * @Route("/symfony-aws-s3", name="default")
	 */
	public function index(S3Client $S3Client) {
		$bucket = "larateste";
		$caminho = $this->getParameter("kernel.project_dir") . "/public/arquivos/";
		$filename = $caminho . "video.mp4"; //imagem.jpg isaias.pdf video.mp4
		$content_type = mime_content_type($filename);
		//$key = "blonde-symfony";
		$key = md5(time());
		// dizer para s3 que quero fazer um upload
		$upload = $S3Client->createMultipartUpload([
			"Bucket" => $bucket,
			"Key" => $key,
			"ContentType" => $content_type,
		]);
		// envio do upload
		$file = $S3Client->uploadPart([
			"Bucket" => $bucket,
			"Key" => $key,
			"SourceFile" => $filename,
			"UploadId" => $upload['UploadId'],
			"PartNumber" => 1
		]);
		
		$done = $S3Client->completeMultipartUpload([
			"Bucket" => $bucket,
			"Key" => $key,
			"UploadId" => $upload['UploadId'],
			"MultipartUpload" => [
				"Parts" => [
					[
						"ETag" => $file['ETag'],
						"PartNumber" => 1
					]
				]
			]
		]);

		VarDumper::dump($done);
		exit;

		return $this->render('default/index.html.twig', [
			'controller_name' => 'DefaultController',
		]);
	}
}
