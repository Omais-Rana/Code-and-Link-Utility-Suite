<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .form-link {
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .form-link:hover {
            color: #3498db;
        }

        h1 {
            color: #252628;
            font-family: "ProximaNova ExtraBold", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 62px;
            font-weight: 800;
            line-height: 56px;
        }

        h2 {
            color: #56575b;
            font-family: "ProximaNova Regular", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <section class="bg-gray-100 mb-20">
        <div class="container items-center">

            <div class=" items-center text-center">
                <h1 style="text-align: center;">Multi-Purpose Code and Link Management Platform</h1>
                <h2 style="text-align: center;">Create QR Codes, Barcodes and Short Links. Download and share them
                    anywhere.
                </h2>
            </div>
        </div>

        <div class="container mt-5">
            <table class="table table-bordered mx-auto" style="width: 50%;">
                <thead>
                    <tr class="text-center">
                        <th class="align-middle">
                            <a href="#" class="form-link"
                                data-form-url="{{ route('showForm', ['form' => 'QRcode']) }}">QR Code</a>
                        </th>
                        <th class="align-middle">
                            <a href="#" class="form-link"
                                data-form-url="{{ route('showForm', ['form' => 'barcode']) }}">Barcode</a>
                        </th>
                        <th class="align-middle">
                            <a href="#" class="form-link"
                                data-form-url="{{ route('showForm', ['form' => 'shortened_url']) }}">Short Link</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" class="text-center">
                            <div id="form-container"></div>
                            <div id="qrcode-container"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.form-link').on('click', function(e) {
                    e.preventDefault();

                    var formUrl = $(this).data('form-url');

                    $.get(formUrl, function(data) {
                        $('#form-container').html(data);
                        $('#qrcode-container, #barcode-container, #shortened-url-container').empty();
                    });
                });

                $(document).on('submit', 'form', function(e) {
                    e.preventDefault();

                    var form = $(this);

                    $.ajax({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: form.serialize(),
                        success: function(data) {
                            $('#qrcode-container, #barcode-container, #shortened-url-container')
                                .html(data);
                            form.find(
                                'input[name="url"], input[name="barcode_text"]'
                            ).val('');
                        },
                        error: function(xhr, status, error) {
                            handleAjaxError(xhr);
                        },
                    });
                });



                $(document).on('click', '.download-link', function(e) {
                    e.preventDefault();

                    var filename = $(this).data('filename');

                    if (filename) {
                        var downloadUrl = '/download/' + filename;

                        // Create a hidden link and trigger the click to start the download
                        var link = document.createElement('a');
                        link.href = downloadUrl;
                        link.download = filename;
                        link.target = '_blank';
                        link.style.display = 'none';

                        link.type = 'image/png'; // Adjust the content type based on fileType if needed

                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    } else {
                        console.error('Filename not available for download.');
                    }
                });

            });
        </script>
    </section>
</body>

</html>
