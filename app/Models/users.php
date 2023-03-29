<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'users';
    protected $guarded = [];
    protected $primaryKey = 'id_users';
    protected $hidden = [];
}
