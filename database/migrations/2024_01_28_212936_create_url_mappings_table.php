<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlMappingsTable extends Migration
{
    public function up()
    {
        Schema::create('url_mappings', function (Blueprint $table) {
            $table->string('shortened_url')->primary();
            $table->text('original_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('url_mappings');
    }
}
