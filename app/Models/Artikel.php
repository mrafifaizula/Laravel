<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // kolom (fillabel) nama saja yang boleh di isi
    public $fillabel =  ['judul', 'foto', 'kategori', 'konten', 'penulis'];

    // KOLOM (field) nama saja yang boleh diperlihatan
    public $visible =  ['judul', 'foto', 'kategori', 'konten', 'penulis'];
}
