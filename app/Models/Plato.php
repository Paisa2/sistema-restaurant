<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    public $timestamps =false;
    protected $table= 'platos';
    protected $fillable = [
        'name',
        'descripcion',
        'cantidad',
        'precio'
    ];
}
