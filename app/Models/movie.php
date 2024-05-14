<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    // kolom (fillabel) nama saja yang boleh di isi
    public $fillabel =  ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];

    // KOLOM (field) nama saja yang boleh diperlihatan
    public $visible =  ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];
}
