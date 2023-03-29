<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hashtaglist extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hashtag_list';
    protected $guarded = [];
    protected $primaryKey = 'id_hashtag_list';
    protected $hidden = [];
}
