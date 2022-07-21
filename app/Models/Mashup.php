<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mashup extends Model
{
    use HasFactory,Notifiable;

    protected $fillable=[
        "name","email","subject","message"
    ];

    protected $table="Mashup";

}