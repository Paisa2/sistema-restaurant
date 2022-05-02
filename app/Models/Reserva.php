<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public $timestamps =false;
    protected $table= 'reserva';
    protected $fillable = [
        'nombreUsuario',
        'numeroMesa',
        'hora',
        'fecha'
    ];
}
