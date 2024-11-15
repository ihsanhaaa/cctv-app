<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiCctv extends Model
{
    use HasFactory;

    protected $table = 'lokasi_cctvs';
    protected $guarded = ['id'];
}
