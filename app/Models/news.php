<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['foto', 'kategori', 'judul','isi','tanggal'];
    public $timestamps = false;

}
