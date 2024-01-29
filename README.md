# Bitly Clone (Under Development)

# Current Features:
--QR Code Generation<br>
--Barcode Generation<br>
--URL Shortener

# Working:
--Makes use of a laravel template to authenticate the user before they are able to use the features.<br>

You may use the following account credentials to login or register a new account.
```
User: user@user.com
Pass: secret
```
--It also provides the option of downloading as PNG files in the user's default Download directory.<br>
--In storage/app/qrcodes or /barcodes the codes are automatically stored (as PNG) after being generated.
--Original URLs and their shortened versions are stored in the database with the table named as "url_mappings".
 
# Links:
[QR Code Package.](http://www.simplesoftware.io/#/docs/simple-qrcode) <br>
[Barcode Package.](https://github.com/picqer/php-barcode-generator) <br>
[Laravel Template.](http://www.github.com/nasirkhan/laravel-starter)

<h2>Imagick extension for PHP is must for PNG format. You can change the change for SVG and it doesn't require any extensions</h2><br>
