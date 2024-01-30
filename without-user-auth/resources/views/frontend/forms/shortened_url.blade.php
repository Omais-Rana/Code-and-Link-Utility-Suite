@if (!isset($url))
    <form id="shorten-url-form" action="{{ route('url.shorten') }}" method="post">
        @csrf
        <label for="url">Enter your URL:</label>
        <input type="url" name="url" id="url" required><br>
        <button type="submit" id="generateBarcodeButton" class="generate-button"
            style="background-color: rgb(53, 53, 214); color: whitesmoke; border-radius: 6px; padding: 3px">
            Shorten Link
        </button>
    </form>
@endif

@if (isset($url) && isset($shortenedURL))
    <div id="shortened-url-container">
        <p>Original URL: {{ $url }}</p>
        <p>Shortened URL: <a href="{{ $shortenedURL }}" target="_blank">{{ $shortenedURL }}</a></p>
    </div>
@endif
