<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hashtag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hashtag';
    protected $guarded = [];
    protected $primaryKey = 'id_hashtag';
    protected $hidden = [];
}
