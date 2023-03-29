<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengunjung extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pengunjung';
    protected $guarded = [];
    protected $primaryKey = 'id_pengunjung';
    protected $hidden = [];
}
