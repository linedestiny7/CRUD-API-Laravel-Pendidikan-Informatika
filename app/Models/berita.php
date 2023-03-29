<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class berita extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'berita';
    protected $guarded = [];
    protected $primaryKey = 'id_berita';
    protected $hidden = [];
}
