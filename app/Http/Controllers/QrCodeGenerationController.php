<?php

namespace App\Http\Controllers;

use chillerlan\QRCode\QRcode ;
use chillerlan\QRCode\QROptions ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class QrCodeGenerationController extends Controller
{
    public function __invoke()
    {
        $strings = request()->get('strings');
        $lines = explode("\n", $strings);
        // foreach ($lines as $text){

            // Sstorage::makeDirectory('qrcode/');
            qr($lines);
        // }

        return back();
    }

}
function qr(array $lines){
    $options = new QROptions([
		'version'    => 5,
		'outputType' => 'png',
		'eccLevel'   => QRCode::ECC_L,
	]);
	// invoke a fresh QRCode instance
	$qrcode = new QRCode($options);


	// ...with additional cache file
    // $dir = Storage::makeDirectory(public_path('qrcode'));
    $dir = time() . random_int(100,10000 );
    if(!Storage::disk('local')->exists($dir)) {
        Storage::disk('local')->makeDirectory($dir);
    }
    foreach ($lines as $text){
          $fileName = trim($text) .'.png';
          Storage::disk('local')->put( $dir . '/' . $fileName , $qrcode->render($text) );

        // $qrcode->render($text , storage_path("app\\qrcode\\") . $fileName);
    }

    // Storage::disk('local')->put($text . '.png' , 'Contents');
}
