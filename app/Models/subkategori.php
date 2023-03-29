<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subkategori extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sub_kategori';
    protected $guarded = [];
    protected $primaryKey = 'id_sub_kategori';
    protected $hidden = [];
}
