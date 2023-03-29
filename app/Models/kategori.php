<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
    use HasFactory;
    // Fungsi SoftDeletes adalah agar data yang di hapus tidak terhapus secara permanen
    use SoftDeletes;
    // Menghubungkan tabel
    protected $table = 'kategori';
    // Memungkinkan website yang terhubung dengan webserive untuk mengisi semua form yang ada
    protected $guarded = [];
    // Menentukan Primary Key
    protected $primaryKey = 'id_kategori';
    // Berfungsi untuk menampilkan semua data di field tabel
    protected $hidden = [];

}
