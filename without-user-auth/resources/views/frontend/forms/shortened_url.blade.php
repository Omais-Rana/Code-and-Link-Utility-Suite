@if (!isset($url))
    <form id="shorten-url-form" action="{{ route('url.shorten') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="barcode_text" class="form-label" style="font-weight: 800;">Enter your URL</label>
            <div class="input-group">
                <input class="form-control" type="url" name="url" id="url">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary generate-button" id="generateURLButton"
                        type="submit">Shorten</button>
                </div>
            </div>
        </div>
    </form>
@endif

@if (isset($url) && isset($shortenedURL))
    <div id="shortened-url-container">
        <p>Original URL: {{ $url }}</p>
        <p>Shortened URL: <a href="{{ $shortenedURL }}" style="color: #5f2dee" target="_blank">{{ $shortenedURL }}</a>
        </p>
    </div>
@endif
