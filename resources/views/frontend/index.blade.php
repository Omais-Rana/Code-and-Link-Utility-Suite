@extends('frontend.layouts.app')

@section('title')
    Bitly Clone
@endsection

@section('content')
    <style>
        .form-link {
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .form-link:hover {
            color: #3498db;
        }
    </style>
    <section class="bg-gray-100 mb-20">
        <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">

            <div
                class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-5xl text-5xl mb-4 font-medium text-gray-800">
                    Make every connection count
                </h1>
                <p class="mb-8 sm:text-3xl text-2xl">
                    Create short links, QR Codes, and Link-in-bio pages. Share them anywhere.
                    Track what’s working, and what’s not. All inside the Bitly Connections Platform.
                </p>

                @include('frontend.includes.messages')

            </div>
        </div>

        <div class="flex justify-center">
            <div class="container mt-5">
                <p class="text-center">Select an option.</p>
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
                                    data-form-url="{{ route('showForm', ['form' => 'option3']) }}">Option 3</a>
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
                        $('#qrcode-container, #barcode-container').empty();
                    });
                });

                $(document).on('submit', 'form', function(e) {
                    e.preventDefault();

                    if (isUserSignedIn()) {
                        var form = $(this);

                        $.ajax({
                            type: form.attr('method'),
                            url: form.attr('action'),
                            data: form.serialize(),
                            success: function(data) {
                                $('#qrcode-container, #barcode-container').html(data);
                                form.find('input[name="url"], input[name="barcode_text"]').val(
                                    '');
                            },
                            error: function(xhr, status, error) {
                                handleAjaxError(xhr);
                            },
                        });
                    } else {
                        console.log('User is not signed in. Redirecting to login page.');
                        window.location.href = '/login';
                    }
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

                function isUserSignedIn() {
                    var isSignedIn = false;

                    $.ajax({
                        type: 'GET',
                        url: '/check-auth',
                        async: false,
                        success: function(data) {
                            isSignedIn = data.isSignedIn;
                        },
                        error: function(xhr, status, error) {
                            handleAjaxError(xhr);
                        },
                    });

                    return isSignedIn;
                }

                function handleAjaxError(xhr) {
                    if (xhr.status === 401) {
                        console.log('User is not signed in. Redirecting to login page.');
                        window.location.href = '/login';
                    } else {
                        console.error(xhr.responseText);
                    }
                }

            });
        </script>
    @endsection
