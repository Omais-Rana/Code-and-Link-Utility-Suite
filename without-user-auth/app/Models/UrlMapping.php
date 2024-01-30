<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlMapping extends Model
{
    protected $table = 'url_mappings';
    protected $primaryKey = 'shortened_url';
    public $incrementing = false;
    protected $fillable = ['shortened_url', 'original_url'];
}
