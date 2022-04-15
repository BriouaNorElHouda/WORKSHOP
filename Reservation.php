<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'idReservation', 'idRoom','idUser', 'date','time','state','objective'

    ];
    protected $primaryKey = 'idReservation';

    public $incrementing = false;
}
