<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Illuminate\Support\Facades\Storage;

class BarcodeController extends Controller
{
    public function generate(Request $request)
    {
        $barcodeText = $request->input('barcode_text');
        $barcodeImage = $this->generateBarcode($barcodeText);

        $filename = $this->storeBarcode($barcodeImage, 'png');

        return view('frontend.forms.barcode', compact('barcodeImage', 'barcodeText', 'filename'));
    }

    private function generateBarcode($text)
    {
        $generator = new BarcodeGeneratorPNG();
        $barcodeImage = $generator->getBarcode($text, $generator::TYPE_CODE_128);

        return $barcodeImage;
    }

    private function storeBarcode($barcodeImage)
    {
        $filename = 'barcodes/' . uniqid() . '.png';
        Storage::put($filename, $barcodeImage);

        return $filename;
    }

    public function downloadBarcode($filename)
    {
        $path = 'barcodes/' . $filename;

        if (Storage::exists($path)) {
            $fileContent = Storage::get($path);

            return response()->make($fileContent, 200, [
                'Content-Type' => 'image/png',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ]);
        } else {
            abort(404, 'File not found');
        }
    }

    public function checkAuth()
    {
        return response()->json(['isSignedIn' => auth()->check()]);
    }
}
