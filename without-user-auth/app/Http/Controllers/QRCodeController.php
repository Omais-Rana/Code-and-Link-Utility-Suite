<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('frontend.forms.QRcode');
    }

    public function generate(Request $request)
    {
        $url = $request->input('url');
        $qrCode = QrCode::format('png')->size(300)->generate($url);

        $filename = $this->storeQRCode($qrCode, 'png');

        return view('frontend.forms.QRcode', compact('qrCode', 'url', 'filename'));
    }

    private function storeQRCode($qrCode)
    {
        $filename = 'qrcodes/' . uniqid() . '.png';
        Storage::put($filename, $qrCode);

        return $filename;
    }


    public function downloadFile($filename)
    {
        $path = 'qrcodes/' . $filename;

        if (Storage::exists($path)) {
            $fileContent = Storage::get($path);

            return Response::make($fileContent, 200, [
                'Content-Type' => 'image/png',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ]);
        } else {
            abort(404, 'File not found');
        }
    }
}
