<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar_user extends Model
{
    use HasFactory;

    protected $table = 'komentar_user';
    protected $fillable = ['id','deskripsi'];
}
