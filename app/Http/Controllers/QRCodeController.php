<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRCodeController extends Controller{
    public function qrCode(){
        //return QrCode::size(500)->generate('A tutorial of QR code!');
    }
}