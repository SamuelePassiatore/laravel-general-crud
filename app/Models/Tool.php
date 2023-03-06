<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use HasFactory;

    protected $casts = ['supported_os' => 'array'];
    use SoftDeletes;
    protected $fillable = ['name', 'img_url', 'description', 'category', 'release_year', 'latest_version', 'download_link', 'supported_os', 'vote'];
}
