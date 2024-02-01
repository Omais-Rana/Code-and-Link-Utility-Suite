@if (!isset($barcodeImage))
    <form id="barcode-form" action="{{ route('barcode.generate') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="barcode_text" class="form-label" style="font-weight: 800;">Enter your Barcode information</label>
            <div class="input-group">
                <input type="text" class="form-control" name="barcode_text" id="barcode_text">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary generate-button" id="generateBarcodeButton"
                        type="submit">Generate</button>
                </div>
            </div>
        </div>

    </form>
@endif

@if (isset($barcodeImage))
    <div id="barcode-container">
        <img src="data:image/png;base64, {!! base64_encode($barcodeImage) !!}">
        @if (isset($filename))
            <p style="padding-top: 15px;"><button class="btn btn-primary download-link"
                    style="background-color: #5f2dee" data-filename="{{ $filename }}">Download as PNG</button></p>
        @endif
    </div>
@endif
