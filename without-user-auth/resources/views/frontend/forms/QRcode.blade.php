@if (!isset($qrCode))
    <form id="qrcode-form" action="{{ route('qrcode.generate') }}" method="post">
        @csrf
        <label for="url">Enter your QR Code destination:</label>
        <input type="text" name="url" id="url" required><br>
        <button type="submit" id="generateQRButton" class="generate-button"
            style="background-color: rgb(53, 53, 214); color: whitesmoke; border-radius: 6px; padding: 3px">
            Generate QR Code
        </button>
    </form>
@endif

@if (isset($qrCode))
    <div id="qrcode-container">
        <img src="/download/{{ $filename }}" alt="QR Code">
        @if (isset($filename))
            <p>Download QR Code: <a href="#" class="download-link" style="color: rgb(128, 128, 201)"
                    data-filename="{{ $filename }}">Download</a></p>
        @endif
    </div>
@endif
