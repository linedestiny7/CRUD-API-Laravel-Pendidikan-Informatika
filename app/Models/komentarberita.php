<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class komentarberita extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'komentar_berita';
    protected $guarded = [];
    protected $primaryKey = 'id_komentar_berita';
    protected $hidden = [];
}
