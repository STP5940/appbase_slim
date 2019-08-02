<?php
namespace App\controllers;

use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Response\QrCodeResponse;

class QrcodeController extends Controller
{
    /**
     * Homepage
     */

    public function Index($request, $response, $args)
    {

      // Create a basic QR code
      $srting = '492PkSH2KUVYKzupwdjoR8gPzqW1d8xtcZ9fVyzptNSWJWf9UC3Wkkf9CyuEhpeAh57xq8H8YtJ721qYm1Kd3ow27bM7XF3';
      $qrCode = new QrCode($srting);
      $qrCode->setSize(300);

      // Set advanced options
      $qrCode->setWriterByName('png');
      $qrCode->setMargin(10);
      $qrCode->setEncoding('UTF-8');
      $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
      $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
      $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
      // $qrCode->setLabel("Monero wallet (Publickey)", 16, __DIR__.'/../../vendor/endroid/qr-code/assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
      // $qrCode->setLogoPath(__DIR__.'/../../public/storage/qr-code/logo/Monero2-icon.png');
      $qrCode->setLogoSize(100, 100);
      $qrCode->setRoundBlockSize(true);
      $qrCode->setValidateResult(false);
      $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

      // Directly output the QR code
      header('Content-Type: '.$qrCode->getContentType());
      echo $qrCode->writeString();

      // Save it to a file
      $qrCode->writeFile(__DIR__.'/../../public/storage/qr-code/'.md5($srting).'.png');

      // Create a response object
      $response = new QrCodeResponse($qrCode);
      exit();
      // return view('index');
    }

}
