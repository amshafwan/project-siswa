<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambah extends Model
{
    protected $table = 'tambahs';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'kelas', 'jurusan'];
    use HasFactory;
}