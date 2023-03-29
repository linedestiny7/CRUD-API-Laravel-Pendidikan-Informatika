<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class riwayatbaca extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'riwayat_baca';
    protected $guarded = [];
    protected $primaryKey = 'id_riwayat_baca';
    protected $hidden = [];
}
