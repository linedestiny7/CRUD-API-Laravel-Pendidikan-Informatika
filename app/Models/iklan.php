<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class iklan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'iklan';
    protected $guarded = [];
    protected $primaryKey = 'id_iklan';
    protected $hidden = [];
}
