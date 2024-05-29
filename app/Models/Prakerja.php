<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prakerja extends Model
{
    use HasFactory;
    protected $table = 'prakerja';
    protected $fillable = ['nama','email','telpon','alamat','pendidikan_terakhir','foto_user'];
}
