@if (!isset($barcodeImage))
    <form id="barcode-form" action="{{ route('barcode.generate') }}" method="post">
        @csrf
        <label for="barcode_text">Enter your barcode information:</label>
        <input type="text" name="barcode_text" id="barcode_text" required><br>
        <button type="submit" id="generateBarcodeButton" class="generate-button"
            style="background-color: rgb(53, 53, 214); color: whitesmoke; border-radius: 6px; padding: 3px">
            Generate Barcode
        </button>
    </form>
@endif

@if (isset($barcodeImage))
    <div id="barcode-container">
        <img src="data:image/png;base64, {!! base64_encode($barcodeImage) !!}">
        @if (isset($filename))
            <p>Download Barcode: <a href="#" class="download-link" style="color: rgb(128, 128, 201)"
                    data-filename="{{ $filename }}">Download</a></p>
        @endif
    </div>
@endif
