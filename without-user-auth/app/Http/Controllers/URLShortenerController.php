<?php

namespace App\Http\Controllers;

use App\Models\UrlMapping;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class URLShortenerController extends Controller
{
    public function shorten(Request $request)
    {
        $url = $request->input('url');

        $request->validate([
            'url' => 'required|url',
        ]);

        $shortenedURL = 'sho.rt/' . Str::random(6);

        UrlMapping::create([
            'shortened_url' => $shortenedURL,
            'original_url' => $url,
        ]);

        return view('frontend.forms.shortened_url', compact('url', 'shortenedURL'));
    }

    public function redirect($shortened)
    {
        $url = UrlMapping::where('shortened_url', 'sho.rt/' . $shortened)->first();

        if ($url) {
            return redirect($url->original_url);
        }

        return response()->json(['message' => 'URL not found'], 404);
    }
}
