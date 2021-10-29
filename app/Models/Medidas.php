<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medidas extends Model
{
    use HasFactory;
    protected $guarded = ['id_medidas'];
    protected $table = "medidas";
    protected $primaryKey = 'id_medidas';
    public $timestamps = false;

}
