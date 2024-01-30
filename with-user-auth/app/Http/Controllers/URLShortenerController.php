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

        // Validate the URL
        $request->validate([
            'url' => 'required|url',
        ]);

        // Shorten the URL
        $shortenedURL = 'bit.ly/' . Str::random(6);

        // Save the mapping to the database
        UrlMapping::create([
            'shortened_url' => $shortenedURL,
            'original_url' => $url,
        ]);

        return view('frontend.forms.shortened_url', compact('url', 'shortenedURL'));
    }

    public function redirect($shortened)
    {
        $url = UrlMapping::where('shortened_url', 'bit.ly/' . $shortened)->first();

        if ($url) {
            return redirect($url->original_url);
        }

        return response()->json(['message' => 'URL not found'], 404);
    }
}
