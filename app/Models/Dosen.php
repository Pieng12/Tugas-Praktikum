<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'Dosen';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'mata_kuliah', 'umur'];
    public $timestamps = false;

}
