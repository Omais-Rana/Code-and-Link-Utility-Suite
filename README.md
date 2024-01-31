# Multi-Purpose Code and Link Management Platform

# Features:
* QR Code Generation<br>
* Barcode Generation<br>
* URL Shortener

# Working:
<h2>For usage with user authentication</h2>
- Makes use of a laravel template to authenticate the user before they are able to use the features.<br>
- You may use the following account credentials to login. The sign up option is not accessible but the module has been built.<br>

```
User: user@user.com
Pass: secret
```

<h2>General uses</h2>
- Provides the option of downloading codes as PNG files in the user's default Download directory.<br>
- In storage/app/qrcodes or /barcodes the codes are automatically stored (as PNG) after being generated.<br>
- Original URLs and their shortened versions are stored in the database with the table named as "url_mappings".
- The prefix "sho.rt/" is used in shortened links which can be changed from URL controller and the web route files.

# Installation

Follow the steps mentioned below to install and run the project. You may find more details about the installation in [Installation Wiki](https://github.com/nasirkhan/laravel-starter/wiki/Installation).

1. Clone or download the repository
2. Go to the project directory and run `composer install`
3. Create `.env` file by copying the `.env.example`. You may use the command to do that `cp .env.example .env`
4. Update the database name and credentials in `.env` file
5. Run composer require `simplesoftwareio/simple-qrcode "~4"` and `composer require picqer/php-barcode-generator` to add the packages. 
6. Run the command to generate application key `php artisan key:generate`
7. Run the command `php artisan migrate --seed`
8. Link storage directory: `php artisan storage:link`
9. Run this command to create a table `php artisan make:migration create_url_mappings_table` and migrate using `php artisan migrate`
10. You may create a virtualhost entry to access the application or run `php artisan serve` from the project root and visit `http://127.0.0.1:8000`
    
# Links:
[QR Code Package.](http://www.simplesoftware.io/#/docs/simple-qrcode) <br>
[Barcode Package.](https://github.com/picqer/php-barcode-generator) <br>
[Laravel Template.](http://www.github.com/nasirkhan/laravel-starter)

<h2>Imagick extension for PHP is must for PNG format. You can change the change for SVG and it doesn't require any extensions</h2>
