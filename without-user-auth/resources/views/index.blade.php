<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .bg-gray-100 {
            background-color: #f8f9fa;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: center;
        }

        .form-link {
            text-decoration: none;
            color: #007bff;
        }

        .form-link:hover {
            color: #5f2dee;
        }

        .form-link {
            color: #1D1729;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
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

        .icons {
            vertical-align: middle;
            margin-right: 5px;
        }

        .form-link:hover .icons path {
            fill: #5f2dee;
            cursor: pointer;
            transition: color 0.3s ease;
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
        <div class="flex justify-center">
            <div class="container mt-5">
                <table class="table table-bordered mx-auto" style="width: 50%;">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle">
                                <a href="#" class="form-link"
                                    data-form-url="{{ route('showForm', ['form' => 'QRcode']) }}"><svg class="icons"
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 26" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.5 11H9.5C10.6 11 11.5 10.1 11.5 9V5C11.5 3.9 10.6 3 9.5 3H5.5C4.4 3 3.5 3.9 3.5 5V9C3.5 10.1 4.4 11 5.5 11ZM5.5 5H9.5V9H5.5V5ZM5.5 21H9.5C10.6 21 11.5 20.1 11.5 19V15C11.5 13.9 10.6 13 9.5 13H5.5C4.4 13 3.5 13.9 3.5 15V19C3.5 20.1 4.4 21 5.5 21ZM5.5 15H9.5V19H5.5V15ZM13.5 9V5C13.5 3.9 14.4 3 15.5 3H19.5C20.6 3 21.5 3.9 21.5 5V9C21.5 10.1 20.6 11 19.5 11H15.5C14.4 11 13.5 10.1 13.5 9ZM15.5 9H19.5V5H15.5V9ZM21.5 20.5V19.5C21.5 19.22 21.28 19 21 19H20C19.72 19 19.5 19.22 19.5 19.5V20.5C19.5 20.78 19.72 21 20 21H21C21.28 21 21.5 20.78 21.5 20.5ZM13.5 14.5V13.5C13.5 13.22 13.72 13 14 13H15C15.28 13 15.5 13.22 15.5 13.5V14.5C15.5 14.78 15.28 15 15 15H14C13.72 15 13.5 14.78 13.5 14.5ZM17 15H16C15.72 15 15.5 15.22 15.5 15.5V16.5C15.5 16.78 15.72 17 16 17H17C17.28 17 17.5 16.78 17.5 16.5V15.5C17.5 15.22 17.28 15 17 15ZM13.5 18.5V17.5C13.5 17.22 13.72 17 14 17H15C15.28 17 15.5 17.22 15.5 17.5V18.5C15.5 18.78 15.28 19 15 19H14C13.72 19 13.5 18.78 13.5 18.5ZM16 21H17C17.28 21 17.5 20.78 17.5 20.5V19.5C17.5 19.22 17.28 19 17 19H16C15.72 19 15.5 19.22 15.5 19.5V20.5C15.5 20.78 15.72 21 16 21ZM19 19H18C17.72 19 17.5 18.78 17.5 18.5V17.5C17.5 17.22 17.72 17 18 17H19C19.28 17 19.5 17.22 19.5 17.5V18.5C19.5 18.78 19.28 19 19 19ZM19 13H18C17.72 13 17.5 13.22 17.5 13.5V14.5C17.5 14.78 17.72 15 18 15H19C19.28 15 19.5 14.78 19.5 14.5V13.5C19.5 13.22 19.28 13 19 13ZM21 17H20C19.72 17 19.5 16.78 19.5 16.5V15.5C19.5 15.22 19.72 15 20 15H21C21.28 15 21.5 15.22 21.5 15.5V16.5C21.5 16.78 21.28 17 21 17Z"
                                            fill="#36383B"></path>
                                    </svg><span>QR Code</span></a>
                            </th>
                            <th class="align-middle">
                                <a href="#" class="form-link"
                                    data-form-url="{{ route('showForm', ['form' => 'barcode']) }}"><svg class="icons"
                                        width="25" height="26" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                        <defs id="SvgjsDefs1002"></defs>
                                        <g id="SvgjsG1008"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                                                width="25" height="24">
                                                <path fill="#1a1a1a"
                                                    d="M4.8 24.4s0 .1 0 0v51.1s0 .1.1.1h6.9s.1 0 .1-.1v-51s0-.1-.1-.1h-7zM15 24.4h3.5v51.2H15zM43.1 24.4c-.1 0-.1.1 0 0L43 75.5s0 .1.1.1H50s.1 0 .1-.1v-51s0-.1-.1-.1h-6.9zM53.2 24.4h3.5v51.2h-3.5zM30.9 24.4h2.9v51.2h-2.9zM37.3 24.4h2.9v51.2h-2.9zM21.9 24.4h4.7v51.2h-4.7zM88.2 24.4s0 .1 0 0l-.1 51.1s0 .1.1.1h6.9s.1 0 .1-.1v-51s0-.1-.1-.1h-6.9zM77 24.4h2.9v51.2H77zM82.4 24.4h2.9v51.2h-2.9zM69 24.4h4.7v51.2H69zM61.3 24.4h-1.5c-.1 0-.1 0-.1.1v51h1.6V24.4c.1.1.1 0 0 0zm4.1 0H64c-.1 0-.1 0-.1.1v51h1.6l-.1-51.1c.1.1.1 0 0 0z"
                                                    class="color1a1a1a svgShape"></path>
                                            </svg></g>
                                    </svg>
                                    <span>Barcode</span></a>
                            </th>
                            <th class="align-middle">
                                <a href="#" class="form-link"
                                    data-form-url="{{ route('showForm', ['form' => 'shortened_url']) }}"><svg
                                        class="icons" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 26" fill="none">
                                        <path
                                            d="M6.4 10.6C5.8 9.9 5.5 9.1 5.5 8.3C5.5 7.4 5.8 6.6 6.5 6C7.7 4.8 9.9 4.8 11.1 6L13.3 8.2C13.7 8.6 14.3 8.6 14.7 8.2C15.1 7.8 15.1 7.2 14.7 6.8L12.5 4.5C11.5 3.6 10.1 3 8.7 3C7.3 3 6 3.6 5 4.5C4 5.5 3.5 6.9 3.5 8.3C3.5 9.7 4 11 5 12L7.2 14.2C7.4 14.4 7.7 14.5 7.9 14.5C8.1 14.5 8.4 14.4 8.6 14.2C9 13.8 9 13.2 8.6 12.8L6.4 10.6Z"
                                            fill="#36383B"></path>
                                        <path
                                            d="M20 12L17.8 9.8C17.4 9.4 16.8 9.4 16.4 9.8C16 10.2 16 10.8 16.4 11.2L18.6 13.5C19.2 14.1 19.6 14.9 19.6 15.8C19.6 16.7 19.3 17.5 18.6 18.1C17.3 19.4 15.3 19.4 14 18.1L11.8 15.9C11.4 15.5 10.8 15.5 10.4 15.9C10 16.3 10 16.9 10.4 17.3L12.6 19.5C13.6 20.5 15 21 16.3 21C17.6 21 19 20.5 20 19.5C21 18.5 21.5 17.2 21.5 15.8C21.5 14.3 21 13 20 12Z"
                                            fill="#36383B"></path>
                                        <path
                                            d="M15.2 14.7C15 14.9 14.8 15 14.5 15C14.2 15 14 14.9 13.8 14.7L9.8 10.7C9.4 10.3 9.4 9.7 9.8 9.3C10.2 8.9 10.8 8.9 11.2 9.3L15.2 13.3C15.6 13.7 15.6 14.3 15.2 14.7Z"
                                            fill="#36383B"></path>
                                    </svg><span>Short Link</span></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <div id="form-container"></div>
                                <div id="qrcode-container"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
