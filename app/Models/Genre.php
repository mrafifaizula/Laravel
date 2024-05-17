<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis'];
    public $visible = ['nama_penulis'];
    public $timestamps = true;

    // membuat relasi on to many ke model buku
    public function buku(){
        // data model penulis bisa memiliki banyak data
        // dari model buku melalui fk 'id_penulis'
        return $this->BelongsToMany(Buku::class, 'genre_buku', 'id_buku', 'id_buku');
    }
}
