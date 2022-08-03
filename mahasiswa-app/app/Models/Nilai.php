<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table ='nilais';
    protected $fillable = ['mahasiswas_id', 'matkul', 'nilai', 'grade'];
}
